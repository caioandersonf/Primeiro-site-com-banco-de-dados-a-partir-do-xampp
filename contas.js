        let contas=[
        ['caioandersonf@gmail.com', 'caio2805']
        ];
        let n = contas.length;
        function cont(){
            let i;
            let usuario = document.getElementById("email1");
            let password = document.getElementById("password");
            usuario = usuario.value
            password = password.value
            for(i=0; i<n; i++){
                if(contas[i][0]==usuario){
                    if(contas[i][1]==password){

                        window.location.href = "menu.php";
                        break;
                        
                    }
                }
            }
        }