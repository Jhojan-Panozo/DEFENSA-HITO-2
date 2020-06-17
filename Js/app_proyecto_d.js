new Vue({
    el: 'main',
    mounted() {
        // this.cargarUsers();
        this.AgregarDiente();
    },

    data: {
        ci: '',





        respuesta:'',
    },
    methods: {

        AgregarDiente(){
            const params = new URLSearchParams();

            params.append('ci', this.ci);
            params.append('tratamiento_m', this.tratamiento_m);
            params.append('medicamentos', this.medicamentos);
            params.append('alergias', this.alergias);
            params.append('enfermedades', this.enfermedades);
            params.append('gastricas', this.gastricas);
            params.append('hepatitis', this.hepatitis);
            params.append('tuberculosis', this.tuberculosis);
            params.append('venerias', this.venerias);
            params.append('embarazada', this.embarazada);
            params.append('intermedio', this.intermedio);
            params.append('post_exodoncia', this.post_exodoncia);
            params.append('anticonceptivos', this.anticonceptivos);
            params.append('asma', this.asma);
            params.append('epilepsia', this.epilepsia);
            params.append('renal', this.renal);
            params.append('chagas', this.chagas);
            params.append('diabetes', this.diabetes);
            params.append('sida', this.sida);
            params.append('leusemia', this.leusemia);
            params.append('osteoporosis', this.osteoporosis);
            params.append('hemofilia', this.hemofilia);
            params.append('herpes', this.herpes);
            params.append('cancer', this.cancer);
            params.append('comentario', this.comentario);


            axios.post('script/Proyecto/insertAPatologico.php', params)
                .then((response) => {
                debugger;
                    alert('Palabra agregado correctamento');
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error x1');
                    console.log(error);
                });
        }
    }
});