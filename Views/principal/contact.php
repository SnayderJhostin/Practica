<?php include_once 'Views/template-principal/header.php'; ?>

    <!-- Start Content Page -->
    <div class="container-fluid  py-4">
        <div class="col-md-6 m-auto text-center">
            <h1 class="">Contactanos</h1>
            <p>
                Si tienes alguna consulta no dudes en enviarnos tus mensaje,
                apreciamos tu opinion.
            </p>
        </div>
    </div>

    <!-- Start Contact -->
    <div class="container  ">
        <div class="row ">
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                <div class="mb-3">
                    <label for="inputsubject text-bolder">Asunto</label>
                    <input type="text" class="form-control mt-1 bg-light" id="subject" name="subject" placeholder="">
                </div>    
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputname">Nombres</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Nombre">
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label for="inputemail">Email</label>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="inputmessage">Mensaje</label>
                    <textarea class="form-control mt-1" id="message" name="message" placeholder="Mensaje"
                        rows="8"></textarea>
                </div>
                <div class="row">
                    <div class="col text-center mt-2 mb-3">
                        <button type="submit" class="btn btn-success btn-lg px-3">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End Contact -->


    <?php include_once 'Views/template-principal/footer.php'; ?>
</body>

</html>