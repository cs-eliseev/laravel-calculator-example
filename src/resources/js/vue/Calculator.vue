<template>
    <div class="calculator">
        <form class="row mb-3" ref="calculator" v-if="fields.length !== 0">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="operand1" class="text-secondary">{{ fields.operand1 }}:</label>
                    <input id="operand1" class="form-control" :placeholder="1" name="operand1" type="text" />
                </div>


                <div class="form-group">
                    <label for="operand2" class="text-secondary">{{ fields.operand2 }}:</label>
                    <input id="operand2" class="form-control" :placeholder="2" name="operand2" type="text" />
                </div>

                <div class="form-group">
                    <button class="btn btn-success mx-auto d-block"
                            type="button"
                            title="Рассчитать"
                            :disabled='loadResult' v-on:click='calculate'
                    >Сложить</button>
                </div>
            </div>
            <div class="col-md-6">
                <h5>Результат расчета</h5>
                <div class="loader">
                    <p v-if="result != ''" class="calculator__result bg-light text-break p-2">{{ result }}</p>
                    <div class="loader__spin" v-if='loadResult'><i class="fas fa-spinner fa-spin"></i></div>
                </div>
            </div>
        </form>

        <div v-if='errorMessage' class="alert alert-danger" role="alert" v-html="errorMessage"></div>
    </div>
</template>


<script>
    export default {
        data() {
            return {
                fields: {},
                loadResult: false,
                errorMessage: '',
                result: '',
            }
        },
        methods: {
            calculate (e) {
                this.loadResult = true;
                this.errorMessage = '';
                this.result = '';
                e.preventDefault();
                let form = new FormData(this.$refs.calculator);
                this.$http.post('/api/calculator/sum', form)
                    .then((response) => {
                        this.loadResult = false;
                        let result = response.data;
                        if (result.status) {
                            this.result = result.data.result;
                        } else {
                            this.errorMessage = '[' + result.code + '] ' + result.message;
                        }
                    }).catch((error) => {
                        this.loadResult = false;
                        if (error instanceof Object) {
                            Object.keys(error).forEach(key => {
                                if (this.errorMessage != '') this.errorMessage += '<br />';
                                this.errorMessage += this.fields[key] + ': ' + error[key].join(' ');
                            });
                        } else {
                            this.errorMessage = error;
                        }
                    });
            },
            async getFields(page = null) {
                this.loadResult = true;
                this.errorMessage = '';
                this.fields = {};

                await this.$http.get('/api/fields/group/calculator')
                    .then((response) => {
                        this.loadResult = false;
                        let result = response.data;
                        if (result.status) {
                            this.fields = result.data;
                        } else {
                            this.errorMessage = '[' + result.code + '] ' + result.message;
                        }
                    }).catch((error) => {
                        this.loadResult = false;
                        if (error instanceof Object) {
                            Object.keys(error).forEach(key => {
                                if (this.errorMessage != '') this.errorMessage += '<br />';
                                this.errorMessage += '[' + key + '] ' + error[key];
                            });
                        } else {
                            this.errorMessage = error;
                        }
                    });
            },
        },
        mounted() {
            this.getFields();
        }
    }
</script>
