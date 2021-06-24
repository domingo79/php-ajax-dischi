const app = new Vue({
    el: '#app',
    data: {
        disks: null,
        msg: 'test'
    },
    methods: {

    },
    mounted() {
        axios.get('./api/albums.php')
            .then(resp => {
                console.log(resp);
                this.disks = resp.data
            }).catch(e => {
                console.log(e);
            })
    }
})