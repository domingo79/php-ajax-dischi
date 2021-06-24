const app = new Vue({
    el: '#app',
    data: {
        disks: null,
        error: null,
        genres: ['all'],
        selected: 'all'
    },
    methods: {
        getGenres(data) {
            const genres = []
            data.forEach(el => {
                if (!genres.includes(el.genre)) {
                    genres.push(el.genre)
                }
            })
            return genres;
        }

    },
    mounted() {
        axios.get('./api/albums.php')
            .then(resp => {
                console.log(resp);
                this.disks = resp.data;
            }).catch(e => {
                this.error = 'Could not connect to the API server! ' + e;
                //console.log(e);
            }).finally(() => {
                this.genres = [...this.genres, ...this.getGenres(this.disks)]
            })
    }
})