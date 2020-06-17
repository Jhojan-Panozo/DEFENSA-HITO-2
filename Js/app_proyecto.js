new Vue({
    el: 'main',
    mounted() {
        // this.cargarUsers();
        this.cargarMateria();
        this.GuardarDatosFamiliares();
        this.GuardarHigieneBucal();
        this.GuardarAPatologicos(); 
    },

    data: {
        fecha_ad: '',
        motivo: '',
        ci: '',
        nombre: '',
        pellido_p: '',
        domicilio: '',
        telefono: '',
        celular: '',
        pellido_m: '',
        edad: '',
        masculino: '',
        femenino: '',
        estado_c: '',
        religion: '',
        ocupacion: '',
        direccion: '',
        fecha_n: '',
        escolaridad: '',


        nombre_p: '',
        ocupacion_p: '',
        nombre_m: '',
        ocupacion_m: '',
        antecedentes: '',


        cepillo: '',
        dentrifico: '',
        tiempo: '',
        tdentrifico: '',
        cepillado: '',
        tcepillado: '',
        mango: '',
        cerdas: '',
        mondadientes: '',
        lengua: '',
        dental: '',
        saludb: '',
        arterial: '',
        pulso: '',
        respiracion: '',
        temperatura: '',
        peso: '',
        talla: '',

        tratamiento_m: '',
        medicamentos: '',
        alergias: '',
        enfermedades: '',
        gastricas: '',
        hepatitis: '',
        tuberculosis: '',
        venerias: '',
        embarazada: '',
        intermedio: '',
        post_exodoncia: '',
        anticonceptivos: '',
        asma: '',
        epilepsia: '',
        renal: '',
        chagas: '',
        diabetes: '',
        sida: '',
        leusemia: '',
        osteoporosis: '',
        hemofilia: '',
        herpes: '',
        cancer: '',
        comentario: '',





        respuesta:'',
    },
    methods: {

        GuardarAPatologicos(){
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
        },



        AgregarPalabra(){
            const params = new URLSearchParams();

            params.append('ci', this.ci);
            params.append('nombre', this.nombre);
            params.append('pellido_p', this.pellido_p);
            params.append('pellido_m', this.pellido_m);
            params.append('domicilio', this.domicilio);
            params.append('telefono', this.telefono);
            params.append('celular', this.celular);
            params.append('edad', this.edad);
            params.append('masculino', this.masculino);
            params.append('estado_c', this.estado_c);
            params.append('religion', this.religion);
            params.append('ocupacion', this.ocupacion);
            params.append('direccion', this.direccion);
            params.append('fecha_n', this.fecha_n);
            params.append('escolaridad', this.escolaridad);


            axios.post('script/Proyecto/insertDatosPersonales.php', params)
                .then((response) => {
                debugger;
                    alert('Palabra agregado correctamento');
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error x1');
                    console.log(error);
                });
        },

        GuardarDatosFamiliares(){
            const params = new URLSearchParams();

            params.append('ci', this.ci);
            params.append('nombre_p', this.nombre_p);
            params.append('ocupacion_p', this.ocupacion_p);
            params.append('nombre_m', this.nombre_m);
            params.append('ocupacion_m', this.ocupacion_m);
            params.append('antecedentes', this.antecedentes);



            axios.post('script/Proyecto/insertDatosFamiliares.php', params)
                .then((response) => {
                debugger;
                    alert('Palabra agregado correctamento');
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error x1');
                    console.log(error);
                });
        },

        GuardarHigieneBucal(){
            const params = new URLSearchParams();

            params.append('ci', this.ci);
            params.append('cepillo', this.cepillo);
            params.append('dentrifico', this.dentrifico);
            params.append('tiempo', this.tiempo);
            params.append('tdentrifico', this.tdentrifico);
            params.append('cepillado', this.cepillado);
            params.append('tcepillado', this.tcepillado);
            params.append('mango', this.mango);
            params.append('cerdas', this.cerdas);
            params.append('mondadientes', this.mondadientes);
            params.append('lengua', this.lengua);
            params.append('dental', this.dental);
            params.append('saludb', this.saludb);
            params.append('arterial', this.arterial);
            params.append('pulso', this.pulso);
            params.append('respiracion', this.respiracion);
            params.append('temperatura', this.temperatura);
            params.append('peso', this.peso);
            params.append('talla', this.talla);


            axios.post('script/Proyecto/insertHigieneBucal.php', params)
                .then((response) => {
                debugger;
                    alert('Palabra agregado correctamento');
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error x1');
                    console.log(error);
                });
        },



        registrarUsuario(){
            // alert('hola Mundo!!');
            //recuperamos los datos insertados en el formulario
            const params = new URLSearchParams();
            params.append('ci', this.ci);
            params.append('nombres', this.nombres);
            params.append('apellidos', this.apellidos);
            params.append('email', this.email);
            params.append('esmayor', this.esmayor);
            params.append('password', this.password);

            axios.post('script/insertUsers.php', params)
                .then((response) => {
                    this.cargarUsers();
                    this.limpiarCampos();
                    alert('Usuario agregado correctamento');
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error');
                    console.log(error);
                });
        },

        limpiarCampos(){
            this.ci='';
            this.nombres='';
            this.apellidos='';
            this.email='';
            this.esmayor='';
            this.password='';

        },

        test_conection(){
            var params = new URLSearchParams();
            params.append('engine', this.engine);
            params.append('host', this.host);
            params.append('users', this.users);
            params.append('password', this.password);
            params.append('database', this.database);
            params.append('port', this.port);

            axios.post('script/DataBase/buscarConexion.php', params)
                .then((response) => {
                debugger;

                    if(response.data===0)
                    {
                        alert('Usuario existe');

                    }
                    else{
                        alert('Usuario  no existe');
                    }
                    // if(this.port!=="")
                    // {
                    //     this.engine = response.data.test_conection();
                    //     this.engine = "conexion exitosa!";
                    // }
                    // else   {
                    //     this.engine = response.data.test_conection();
                    //     this.engine = "conexion exitosa!";
                    // }
                    //this.engine = response.data['cadenaPor' ||'cadenaIng'];

                    // if(this.Mar1=== 'ing'){
                    //     this.cadena_tra = response.data.cadenaIng;
                    // }else{
                    //     this.cadena_tra = response.data.cadenaPor;
                    // }

                })
                .catch((error) => {
                    console.log(error);
                });
        }
    }
});