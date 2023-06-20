<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<form action="carga.php" method="POST" id="formulario">
      <div class="modal-body">
        
            <div class="form-floating py-2">
                <input type="text" class="form-control" id="floatingInput" id="cedula" name="cedula" placeholder="name@example.com">
                <label for="floatingInput">Cédula</label>
            </div>

            <div class="form-floating py-2">
            <input type="text" class="form-control" id="floatingInput" id="nombre" name="nombre" placeholder="name@example.com">
            <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating py-2">
            <input type="number" class="form-control" id="floatingInput" id="edad" name="edad" placeholder="name@example.com">
            <label for="floatingInput">Edad</label>
            </div>
            <div class="form-floating py-2">
                <select class="form-select" id="inputGroupSelect04" id="genero" name="genero" aria-label="Example select with button addon">
                    <option selected>Seleccione</option>
                    <option value="m">Masculino</option>
                    <option value="f">Femenino</option>
                </select>
                <label for="floatingInput">Genero</label>
            
            </div>
            <div class="form-floating py-2">
                
                <select class="form-select" id="inputGroupSelect04" id="carrera" name="carrera" aria-label="Example select with button addon">
                    <option selected>Seleccione</option>
                    <option value="sistemas">Sistemas</option>
                    <option value="electrica">Eléctrica</option>
                    <option value="electronica">Eléctronica</option>
                </select>
                <label for="floatingInput">Carrera</label>
            </div>
            <div class="form-floating py-2">

                <select class="form-select" id="inputGroupSelect04" id="turno" name="turno" aria-label="Example select with button addon">
                    <option selected>Seleccione</option>
                    <option value="d">Diurno</option>
                    <option value="t">Tarde</option>
                    <option value="n">Nocturno</option>
                </select>
                <label for="floatingInput">Turno</label>

            </div>

            <input type="text" name='action' value="cargaEst" hidden>
        

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="guardar" class="btn btn-primary">Guardar datos</button>
        </div>
    </form>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="notasModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
<form action="carga.php" method="POST" id="formulario">
      <div class="modal-body">

      

            <div class="form-floating py-2">
                <input type="text" class="form-control" id="floatingInput" id="cedula" name="cedula" placeholder="27394396">
                <label for="floatingInput">Cédula</label>
            </div>
            
            <div class="form-floating py-2">
                <input type="text" class="form-control" id="floatingInput" id="nota1" name="nota1" placeholder="name@example.com">
                <label for="floatingInput">Nota 1</label>
            </div>

            <div class="form-floating py-2">
                <input type="text" class="form-control" id="floatingInput" id="nota2" name="nota2" placeholder="name@example.com">
                <label for="floatingInput">Nota 2</label>
            </div>

            <div class="form-floating py-2">
                <input type="text" class="form-control" id="floatingInput" id="nota3" name="nota3" placeholder="name@example.com">
                <label for="floatingInput">Nota 3</label>
            </div>

            <div class="form-floating py-2">
                <input type="text" class="form-control" id="floatingInput" id="nota4" name="nota4" placeholder="name@example.com">
                <label for="floatingInput">Nota 4</label>
            </div>

    
            <input type="text" name='action' value="cargaNotas" hidden>
            
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="guardar" class="btn btn-primary">Guardar datos</button>
            </div>
        </div>
    </form>
    </div>
  </div>
</div>
