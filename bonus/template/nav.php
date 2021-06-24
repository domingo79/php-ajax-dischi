<body>
    <div id="app">
        <nav>
            <div class="logo">
                <h1><?= $title ?></h1>
            </div>
            <div class="serch">
                <label for="genre">Seleziona genere</label>
                <select name="genre" id="genre" v-model="selected">
                    <option disabled value="">Seleziona uno.</option>
                    <option v-for="genre in genres" :value="genre">{{genre}}</option>
                </select>

            </div>

        </nav>