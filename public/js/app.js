new Vue({
    el: '#app',

    data: {
        skills: [],
        length: Number,
        skill: ''
    },

    created() {
        // Make an ajax request to our server- /skills
        
        // axios.get('/skills').then(response => console.log(response.data));
        // axios.get('/skills').then(response => this.skills = response.data);
        axios.get( '/skills' ).then( response => {
            if (response.status == 200) {
                console.log(response.data.length);
                this.skills = response.data;
                this.length = response.data.length;
                // this.length = this.skills.length;
            } else {
                console.warn(response.data);
            }              
            }).catch( (error)=> {
                console.log( error.response.data );
            });

    },

    methods: {
        insert() {
            if(this.skill != '')
            {
            this.skills.push(this.skill);
            this.skill = '';
            }
            else {
                alert('type skill first');
            }
        }
    }
});