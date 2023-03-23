<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo Mayoristas TUEMPRESA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
</head>
<body>
    <div class="container">

        <div class="center"><img src="logo.png" alt="Logo TUEMPRESA" class="mb-2 mt-3 mb-5 rounded-circle border-1 shadow mx-auto d-block"> </div>


        <p style="text-align: center">Descargar: <br>
        <input type="button" id="btnDescarga" class="btn btn-outline-danger" value="CATALOGO MAYORISTA TUEMPRESA">
        </p>

        <p style="text-align: center" class="mt-5"> 
            <a href="https://www.instagram.com/TUEMPRESA/" class="text-danger display-4"><i class="fa-brands fa-square-instagram"></i></a> 
        </p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        const btnDescarga = document.getElementById("btnDescarga")

        // fileURL, COLOCAR LA DIRECCION DONDE SE ENCUENTRA EL ARCHIVO A DESCARGAR
        const fileURL  = 'https://TUEMPRESA.com/index.php?controller=attachment&id_attachment=1'
        const fileName = 'Catalogo_mayorista_TUEMPRESA.pdf'
        
        btnDescarga.addEventListener("click", ()=>{

            btnDescarga.value = "Descargando . . . "
            btnDescarga.className = "btn btn-success"

            axios({
                url: fileURL,
                method:'GET',
                responseType: 'blob'
            })
            .then((response) => {
                const url = window.URL.createObjectURL(new Blob([response.data]))
                const link = document.createElement('a')
                link.href = url
                link.setAttribute('download', fileName)
                document.body.appendChild(link)
                link.click()
                btnDescarga.value = "CATALOGO MAYORISTA TUEMPRESA"
                btnDescarga.className = "btn btn-danger"
            })
        })

    </script>
</body>
</html>