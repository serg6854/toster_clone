<template>
    <form method='POST' style='display: inline-block'>
        <button type='submit'
                class="btn btn_subscribe btn_active"
                :class='{btn_active: state}'
                @click.prevent='handle'
                role="auth_popup_trigger"
                title="Подписаться на вопрос"
                data-value="Чтобы получать уведомления о&nbsp;новых ответах на&nbsp;вопрос.">
            Подписаться
            <span class="btn__counter" role="subscribers_count">
                <meta itemprop="interactionCount" content="1 UserSubscriptions">
                {{ subscribers }}
            </span>
        </button>
    </form>
</template>

<script>
    export default {
        props: ['subscribers', 'isSubscribed'],

        data() {
            return {
                state: this.isSubscribed
            }
        },

        methods: {
            handle() {
                this.isSubscribed
                    ? this.unsubscribe()
                    : this.subscribe();

                this.state = !this.state;
            },

            subscribe() {
                this.subscribers--;
            },

            unsubscribe() {
                this.subscribers++;
            }
        }
    }
</script>
