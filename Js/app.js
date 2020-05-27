new Vue({
    el: 'main',
    mounted() {
        this.cargarUsers();
        this.cargarMateria();

    },
    data: {
        ci: '',
        nombres: '',
        apellidos: '',
        email: '',
        esmayor: '',
        password: '',
        arrayDeUsuarios: [],
        cod: '',
        nombress:'',
        arrayDeMateria: [],
        num1:'',
        num2:'',
        operation:'',
        respuesta:'',
        respuestaUS:'',


        cadena_es:'',
        cadena_in:'',
        cadena_por:'',
        cadena_res:'',

        cadena_es_b:'',
        Mar1:'',
        Mar2:'',
        cadena_tra:'',
        respuestaPa:'',
        cadena_es_bo:'',
        res_Veri:'',



        engine: '',
        host: '',
        users: '',
        password: '',
        database: '',
        port: '',

        respuesta:'',
    },
    methods: {
        cargarUsers() {
            axios.get('script/getUsers.php')
            //si no existio ningun error se ejecuta THEN
                .then((response) => {
                    this.arrayDeUsuarios = response.data;
                    //console.log(this.arrayDeUsuarios)
                })
                //si ocurrio algun error se ejecutara CATCH
                .catch((error) => {
                    console.log(error);
                });
        },

        cargarMateria() {
            axios.get('script/getMateria.php')
            //si no existio ningun error se ejecuta THEN
                .then((response) => {
                debugger;
                    this.arrayDeMateria = response.data;
                    //console.log(this.arrayDeUsuarios)
                })
                //si ocurrio algun error se ejecutara CATCH
                .catch((error) => {
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

        registrarMateria(){
            // alert('hola Mundo!!');
            //recuperamos los datos insertados en el formulario
            const params = new URLSearchParams();
            params.append('cod', this.cod);
            params.append('nombress', this.nombress);

            axios.post('script/insertMateria.php', params)
                .then((response) => {
                    this.cargarMateria();
                    this.limpiarCampos1();
                    alert('Usuario agregado correctamento');
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error');
                    console.log(error);
                });
        },

        limpiarCampos1(){
            this.cod='';
            this.nombress='';

        },

        versiExiste(){
            const params = new URLSearchParams();
            params.append('ci', this.ci);

            axios.post('script/verUsers.php', params)
                .then((response) => {
                debugger;
                    if(this.respuestaUS !==""){
                        debugger;
                        this.respuestaUS = "existe";
                    }else{
                        this.respuestaUS = "no existe";
                    }
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error');
                    console.log(error);
                });
        },

        EliminarUsuario(){
            const params = new URLSearchParams();
            params.append('ci', this.ci);

            axios.post('script/DeleteUsers.php', params)
                .then((response) => {
                    this.cargarUsers();
                    this.limpiarCampos();
                    alert('Usuario eliminado correctamento');
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error');
                    console.log(error);
                });
        },

        calcularOperation(){
            var params = new URLSearchParams();
            params.append('num1', this.num1);
            params.append('num2', this.num2);
            params.append('operation', this.operation);
            axios.post('script/operation.php', params)
                .then((response) => {
                    debugger;
                    this.respuesta = response.data;
                    if(this.operation==='SUMA'||this.operation==='RESTA'||this.operation==='MULTIPLICA'||this.operation==='DIVIDE'){
                        this.respuesta = response.data;
                    }else {
                        this.respuesta = 'Error De dato';
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },

        AgregarPalabra(){
            const params = new URLSearchParams();

            params.append('cadena_es', this.cadena_es);
            params.append('cadena_in', this.cadena_in);
            params.append('cadena_por', this.cadena_por);

            axios.post('script/Diccionario/InsertDiccionario.php', params)
                .then((response) => {
                    debugger;
                    alert('Palabra agregado correctamento');
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error');
                    console.log(error);
                });
        },

        BuscarPalabra(){
            var params = new URLSearchParams();
            params.append('cadena_es_b', this.cadena_es_b);
            params.append('Mar1', this.Mar1);
            axios.post('script/Diccionario/buscarPalabra.php', params)
                .then((response) => {
                debugger;
                  //this.cadena_tra = response.data['cadenaPor' ||'cadenaIng'];

                if(this.Mar1=== 'ing'){
                    this.cadena_tra = response.data.cadenaPor;
                }else{
                    this.cadena_tra = response.data.cadenaIng;
                }

                })
                .catch((error) => {
                    console.log(error);
                });
        },

        traPalabra(){
            var params = new URLSearchParams();
            params.append('cadena_es_b', this.cadena_es_b);
            params.append('Mar1', this.Mar1);
            params.append('Mar2', this.Mar2);
            axios.post('script/Diccionario/traPalabra.php', params)
                .then((response) => {
                debugger;
                    console.log(response.data);
                    if (this.Mar1 === 'esp') {
                        this.cadena_tra = response.data.cadenaEsp;
                        console.log(response.data.cadenaEsp);
                    }
                    if (this.Mar1 === 'por') {
                        this.cadena_tra = response.data.cadenaIng;
                        console.log(response.data.cadenaPor);
                    }
                    if (this.Mar1 === 'ing') {
                        this.cadena_tra = response.data.cadenaPor;
                        console.log(response.data.cadenaIng);
                    }

                })
                .catch((error) => {
                    console.log(error);
                });
        },

        Eliminar_Pa(){
            const params = new URLSearchParams();
            params.append('cadena_es_bo', this.cadena_es_bo);
            params.append('Mar1', this.Mar1);

            axios.post('script/Diccionario/EliminaPalabra.php', params)
                .then((response) => {

                    alert('Usuario eliminado correctamento');
                    // this.limpiar();
                })
                .catch((error) => {
                    alert('Error');
                    console.log(error);
                });
        },

        // Eliminar_Pa(){
        //     const params = new URLSearchParams();
        //     params.append('cadena_es_bo', this.cadena_es_bo);
        //     params.append('res_Veri', this.res_Veri);
        //
        //     axios.post('script/Diccionario/VerificarPalabra.php', params)
        //         .then((response) => {
        //             debugger;
        //
        //             if(response.data===0)
        //             {
        //                 alert('Usuario no existe');
        //             }
        //             else{
        //                 alert('Usuario existe');
        //             }
        //
        //
        //             alert('Usuario eliminado correctamento');
        //             // this.limpiar();
        //         })
        //         .catch((error) => {
        //             alert('Error');
        //             console.log(error);
        //         });
        // },

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
