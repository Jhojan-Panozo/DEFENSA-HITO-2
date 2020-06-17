new Vue({
    el: 'main',
    mounted() {
        // this.cargarUsers();
        this.cargarUsers();
        // this.GuardarRUsuarios();

    },

    data: {
        ci: '',
        nombre: '',
        apellido_p: '',
        apellido_m: '',
        celular: '',
        gmail: '',
        t_usuario: '',
        usuario: '',
        contrasena: '',
        arrayDeUsuario: [],


        respuesta:'',
    },
    methods: {

        GuardarRUsuarios(){
            const params = new URLSearchParams();

            params.append('ci', this.ci);
            params.append('nombre', this.nombre);
            params.append('apellido_p', this.apellido_p);
            params.append('apellido_m', this.apellido_m);
            params.append('celular', this.celular);
            params.append('gmail', this.gmail);
            params.append('t_usuario', this.t_usuario);
            params.append('usuario', this.usuario);
            params.append('contrasena', this.contrasena);


            axios.post('script/Proyecto/insertRUsuario.php', params)
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
        cargarUsers()
        {
            axios.get('script/Proyecto/getUser.php')
            //si no existio ningun error se ejecuta THEN
                .then((response) => {
                    this.arrayDeUsuario = response.data;
                    //console.log(this.arrayDeUsuario)
                })
                //si ocurrio algun error se ejecutara CATCH
                .catch((error) => {
                    console.log(error);
                });
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