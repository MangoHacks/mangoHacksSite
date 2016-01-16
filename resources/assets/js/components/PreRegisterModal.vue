<template>
    <div class="super_impose" :class="{'active': is_modal_active}">
        <div class="form-content">
            <h3 class="title">We'll just need your email!</h3>
            <h5 class="brah">Spam isn't sweet. So we won't send any. Pinky promise.</h5>
            <form @submit="onSubmit"  v-if="!sent">
                <div class="field input-field">
                    <input v-model="email" value="" type="email" name="EMAIL" required="required true"/>
                    <label alt="Email" data-placeholder="Your Email"></label>
                </div>
                <div class="form-actions">
                    <button type="submit" class="button" :class="{'button--loading': sending}">{{ submit_button_text }}</button>
                    <a @click="onCancelForm" href="#" class="button cancel">Cancel</a>
                </div>
            </form>
            <div v-else class="message">
               {{ sent_message }}
                <a @click="onCancelForm" href="#">Close</a>
            </div>
        </div>
    </div>
</template>

<script type="text/babel">

export default {
    props: ['token'],
    data() {
        return {
            is_modal_active: false,
            email: null,
            sending: false,
            sent: false,
            sent_message: null
        };
    },
    computed: {
        submit_button_text: function() {
            if(this.sending) {
                return '.';
            }
            else {
                return 'Subscribe';
            }
        }
    },
    methods: {
        onSubmit(e) {
            let self = this;
            e.preventDefault();
            self.sending = true;
            this.$http.post('/pre-register', {
                email: self.email,
                _token: self.token
            }).then(function(res){
                self.sending = false;
                self.sent = true;
                self.sent_message = res.data.message;
            });
        },
        onCancelForm(e) {
            e.preventDefault();
            this.closeModal();
        },
        openModal() {
            this.is_modal_active = true;
        },
        closeModal() {
            this.is_modal_active = false;
        }
    },
    events: {
        'external-modal-open': function(){
            this.openModal();
        }
    }
};
</script>