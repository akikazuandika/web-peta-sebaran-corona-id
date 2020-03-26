<template>
    <div class="container">
        <div class="row mt-4">
            <h3 class="col-md-12 text-center mt-4" style="margin-bottom:30px">
                Sebaran kasus CoViD-19 di indonesia
            </h3>
            <div class="col-md-2 card" style="margin-left:175px">
                <div class="card-body text-center">
                    <h5 class="card-title">Positif</h5>
                    <p class="card-text" v-text="summary.positif"></p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 card">
                <div class="card-body text-center">
                    <h5 class="card-title">Meninggal</h5>
                    <p class="card-text" v-text="summary.meninggal"></p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2 card">
                <div class="card-body text-center">
                    <h5 class="card-title">Sembuh</h5>
                    <p class="card-text" v-text="summary.sembuh"></p>
                </div>
            </div>
            <div class="col-md-12 mt-4">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Positif</th>
                        <th scope="col">Meninggal</th>
                        <th scope="col">Sembuh</th>
                        </tr>
                    </thead>
                    <tbody v-for="(data, index) in datas" :key="data.attributes.Kode_Provi" >
                        <tr>
                            <th scope="row">{{ index + 1 }}</th>
                            <td>{{ data.attributes.Provinsi }}</td>
                            <td>{{ data.attributes.Kasus_Posi }}</td>
                            <td>{{ data.attributes.Kasus_Meni }}</td>
                            <td>{{ data.attributes.Kasus_Semb }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                datas : [],
                summary : {}
            }
        },
        mounted() {
            axios({
                method : 'get',
                url : 'api/provinsi'
            })
            .then(response => this.datas = response.data)
            .catch(error => console.log(error))

            axios({
                method : 'get',
                url : 'api/summary'
            })
            .then(response => this.summary = response.data[0])
            .catch(error => console.log(error))
        }
    }
</script>
