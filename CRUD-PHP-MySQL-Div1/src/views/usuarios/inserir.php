<form action="" method="post" class="mt-3">
  <!--  USUNOM	USUSEN	USUTIP-->
    <div class="form-group">
        <label for="unome">NOME:</label>
        <input type="text" name="unome" id="unome" class="form-control">
    </div>
    <div class="form-group">
        <label for="usen">SENHA:</label>
        <input type="password" name="usen" id="usen" class="form-control">
    </div>
    <div class="form-group">
        <label for="utip">TIPO</label>
        <select class="form-select" name="utip" id="utip">
  <option selected>Selecione o tipo de Usuário</option>
  <option value="Atendente">Atendente</option>
  <option value="Enfermeira">Enfermeira</option>
  <option value="Médico">Médico</option>
  <option value="Paciente">Paciente</option>
</select>
    </div>	
</form>