new Vue({
    el: 'main',
    mounted() {
        // this.cargarUsers();
        this.AgregarDiente();
    },

    data: {
        ci: '',

        div_md: '',
        div_md1: '',
        div_md2: '',
        div_md3: '',
        div_md4: '',
        div_md5: '',
        div_md6: '',
        div_md7: '',
        div_md8: '',
        div_md9: '',
        div_md10: '',
        div_md11: '',
        div_md12: '',
        div_md13: '',
        div_md14: '',
        div_md15: '',
        div_md16: '',
        div_md17: '',
        div_md18: '',
        div_md19: '',
        div_md20: '',
        div_md21: '',
        div_md22: '',
        div_md23: '',
        div_md24: '',
        div_md25: '',
        div_md26: '',
        div_md27: '',
        div_md28: '',
        div_md29: '',
        div_md30: '',
        div_md31: '',


        div_arb: '',
        div_arb1: '',
        div_arb2: '',
        div_arb3: '',
        div_arb4: '',
        div_arb5: '',
        div_arb6: '',
        div_arb7: '',
        div_arb8: '',
        div_arb9: '',
        div_arb10: '',
        div_arb11: '',
        div_arb12: '',
        div_arb13: '',
        div_arb14: '',
        div_arb15: '',
        div_arb16: '',
        div_arb17: '',
        div_arb18: '',
        div_arb19: '',
        div_arb20: '',
        div_arb21: '',
        div_arb22: '',
        div_arb23: '',
        div_arb24: '',
        div_arb25: '',
        div_arb26: '',
        div_arb27: '',
        div_arb28: '',
        div_arb29: '',
        div_arb30: '',
        div_arb31: '',


        div_der: '',
        div_der1: '',
        div_der2: '',
        div_der3: '',
        div_der4: '',
        div_der5: '',
        div_der6: '',
        div_der7: '',
        div_der8: '',
        div_der9: '',
        div_der10: '',
        div_der11: '',
        div_der12: '',
        div_der13: '',
        div_der14: '',
        div_der15: '',
        div_der16: '',
        div_der17: '',
        div_der18: '',
        div_der19: '',
        div_der20: '',
        div_der21: '',
        div_der22: '',
        div_der23: '',
        div_der24: '',
        div_der25: '',
        div_der26: '',
        div_der27: '',
        div_der28: '',
        div_der29: '',
        div_der30: '',
        div_der31: '',


        div_abj: '',
        div_abj1: '',
        div_abj2: '',
        div_abj3: '',
        div_abj4: '',
        div_abj5: '',
        div_abj6: '',
        div_abj7: '',
        div_abj8: '',
        div_abj9: '',
        div_abj10: '',
        div_abj11: '',
        div_abj12: '',
        div_abj13: '',
        div_abj14: '',
        div_abj15: '',
        div_abj16: '',
        div_abj17: '',
        div_abj18: '',
        div_abj19: '',
        div_abj20: '',
        div_abj21: '',
        div_abj22: '',
        div_abj23: '',
        div_abj24: '',
        div_abj25: '',
        div_abj26: '',
        div_abj27: '',
        div_abj28: '',
        div_abj29: '',
        div_abj30: '',
        div_abj31: '',


        div_izq: '',
        div_izq1: '',
        div_izq2: '',
        div_izq3: '',
        div_izq4: '',
        div_izq5: '',
        div_izq6: '',
        div_izq7: '',
        div_izq8: '',
        div_izq9: '',
        div_izq10: '',
        div_izq11: '',
        div_izq12: '',
        div_izq13: '',
        div_izq14: '',
        div_izq15: '',
        div_izq16: '',
        div_izq17: '',
        div_izq18: '',
        div_izq19: '',
        div_izq20: '',
        div_izq21: '',
        div_izq22: '',
        div_izq23: '',
        div_izq24: '',
        div_izq25: '',
        div_izq26: '',
        div_izq27: '',
        div_izq28: '',
        div_izq29: '',
        div_izq30: '',
        div_izq31: '',





        respuesta:'',
    },
    methods: {

        AgregarDiente(){
            const params = new URLSearchParams();

            params.append('ci', this.ci);
            params.append('div_md', this.div_md);
            params.append('div_md1', this.div_md1);
            params.append('div_md2', this.div_md2);
            params.append('div_md3', this.div_md3);
            params.append('div_md4', this.div_md4);
            params.append('div_md5', this.div_md5);
            params.append('div_md6', this.div_md6);
            params.append('div_md7', this.div_md7);
            params.append('div_md8', this.div_md8);
            params.append('div_md9', this.div_md9);
            params.append('div_md10', this.div_md10);
            params.append('div_md11', this.div_md11);
            params.append('div_md12', this.div_md12);
            params.append('div_md13', this.div_md13);
            params.append('div_md14', this.div_md14);
            params.append('div_md15', this.div_md15);
            params.append('div_md16', this.div_md16);
            params.append('div_md17', this.div_md17);
            params.append('div_md18', this.div_md18);
            params.append('div_md19', this.div_md19);
            params.append('div_md20', this.div_md20);
            params.append('div_md21', this.div_md21);
            params.append('div_md22', this.div_md22);
            params.append('div_md23', this.div_md23);
            params.append('div_md24', this.div_md24);
            params.append('div_md25', this.div_md25);
            params.append('div_md26', this.div_md26);
            params.append('div_md27', this.div_md27);
            params.append('div_md28', this.div_md28);
            params.append('div_md29', this.div_md29);
            params.append('div_md30', this.div_md30);
            params.append('div_md31', this.div_md31);

            params.append('div_arb', this.div_arb);
            params.append('div_arb1', this.div_arb1);
            params.append('div_arb2', this.div_arb2);
            params.append('div_arb3', this.div_arb3);
            params.append('div_arb4', this.div_arb4);
            params.append('div_arb5', this.div_arb5);
            params.append('div_arb6', this.div_arb6);
            params.append('div_arb7', this.div_arb7);
            params.append('div_arb8', this.div_arb8);
            params.append('div_arb9', this.div_arb9);
            params.append('div_arb10', this.div_arb10);
            params.append('div_arb11', this.div_arb11);
            params.append('div_arb12', this.div_arb12);
            params.append('div_arb13', this.div_arb13);
            params.append('div_arb14', this.div_arb14);
            params.append('div_arb15', this.div_arb15);
            params.append('div_arb16', this.div_arb16);
            params.append('div_arb17', this.div_arb17);
            params.append('div_arb18', this.div_arb18);
            params.append('div_arb19', this.div_arb19);
            params.append('div_arb20', this.div_arb20);
            params.append('div_arb21', this.div_arb21);
            params.append('div_arb22', this.div_arb22);
            params.append('div_arb23', this.div_arb23);
            params.append('div_arb24', this.div_arb24);
            params.append('div_arb25', this.div_arb25);
            params.append('div_arb26', this.div_arb26);
            params.append('div_arb27', this.div_arb27);
            params.append('div_arb28', this.div_arb28);
            params.append('div_arb29', this.div_arb29);
            params.append('div_arb30', this.div_arb30);
            params.append('div_arb31', this.div_arb31);

            params.append('div_der', this.div_der);
            params.append('div_der1', this.div_der1);
            params.append('div_der2', this.div_der2);
            params.append('div_der3', this.div_der3);
            params.append('div_der4', this.div_der4);
            params.append('div_der5', this.div_der5);
            params.append('div_der6', this.div_der6);
            params.append('div_der7', this.div_der7);
            params.append('div_der8', this.div_der8);
            params.append('div_der9', this.div_der9);
            params.append('div_der10', this.div_der10);
            params.append('div_der11', this.div_der11);
            params.append('div_der12', this.div_der12);
            params.append('div_der13', this.div_der13);
            params.append('div_der14', this.div_der14);
            params.append('div_der15', this.div_der15);
            params.append('div_der16', this.div_der16);
            params.append('div_der17', this.div_der17);
            params.append('div_der18', this.div_der18);
            params.append('div_der19', this.div_der19);
            params.append('div_der20', this.div_der20);
            params.append('div_der21', this.div_der21);
            params.append('div_der22', this.div_der22);
            params.append('div_der23', this.div_der23);
            params.append('div_der24', this.div_der24);
            params.append('div_der25', this.div_der25);
            params.append('div_der26', this.div_der26);
            params.append('div_der27', this.div_der27);
            params.append('div_der28', this.div_der28);
            params.append('div_der29', this.div_der29);
            params.append('div_der30', this.div_der30);
            params.append('div_der31', this.div_der31);

            params.append('div_abj', this.div_abj);
            params.append('div_abj1', this.div_abj1);
            params.append('div_abj2', this.div_abj2);
            params.append('div_abj3', this.div_abj3);
            params.append('div_abj4', this.div_abj4);
            params.append('div_abj5', this.div_abj5);
            params.append('div_abj6', this.div_abj6);
            params.append('div_abj7', this.div_abj7);
            params.append('div_abj8', this.div_abj8);
            params.append('div_abj9', this.div_abj9);
            params.append('div_abj10', this.div_abj10);
            params.append('div_abj11', this.div_abj11);
            params.append('div_abj12', this.div_abj12);
            params.append('div_abj13', this.div_abj13);
            params.append('div_abj14', this.div_abj14);
            params.append('div_abj15', this.div_abj15);
            params.append('div_abj16', this.div_abj16);
            params.append('div_abj17', this.div_abj17);
            params.append('div_abj18', this.div_abj18);
            params.append('div_abj19', this.div_abj19);
            params.append('div_abj20', this.div_abj20);
            params.append('div_abj21', this.div_abj21);
            params.append('div_abj22', this.div_abj22);
            params.append('div_abj23', this.div_abj23);
            params.append('div_abj24', this.div_abj24);
            params.append('div_abj25', this.div_abj25);
            params.append('div_abj26', this.div_abj26);
            params.append('div_abj27', this.div_abj27);
            params.append('div_abj28', this.div_abj28);
            params.append('div_abj29', this.div_abj29);
            params.append('div_abj30', this.div_abj30);
            params.append('div_abj31', this.div_abj31);

            params.append('div_izq', this.div_izq);
            params.append('div_izq1', this.div_izq1);
            params.append('div_izq2', this.div_izq2);
            params.append('div_izq3', this.div_izq3);
            params.append('div_izq4', this.div_izq4);
            params.append('div_izq5', this.div_izq5);
            params.append('div_izq6', this.div_izq6);
            params.append('div_izq7', this.div_izq7);
            params.append('div_izq8', this.div_izq8);
            params.append('div_izq9', this.div_izq9);
            params.append('div_izq10', this.div_izq10);
            params.append('div_izq11', this.div_izq11);
            params.append('div_izq12', this.div_izq12);
            params.append('div_izq13', this.div_izq13);
            params.append('div_izq14', this.div_izq14);
            params.append('div_izq15', this.div_izq15);
            params.append('div_izq16', this.div_izq16);
            params.append('div_izq17', this.div_izq17);
            params.append('div_izq18', this.div_izq18);
            params.append('div_izq19', this.div_izq19);
            params.append('div_izq20', this.div_izq20);
            params.append('div_izq21', this.div_izq21);
            params.append('div_izq22', this.div_izq22);
            params.append('div_izq23', this.div_izq23);
            params.append('div_izq24', this.div_izq24);
            params.append('div_izq25', this.div_izq25);
            params.append('div_izq26', this.div_izq26);
            params.append('div_izq27', this.div_izq27);
            params.append('div_izq28', this.div_izq28);
            params.append('div_izq29', this.div_izq29);
            params.append('div_izq30', this.div_izq30);
            params.append('div_izq31', this.div_izq31);
            params.append('comentario', this.comentario);


            axios.post('script/Proyecto/insertDientes.php', params)
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