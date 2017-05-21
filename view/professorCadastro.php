<?php
include "../template/header.php";
?>

<style>
    .demo-card-wide.mdl-card {
        width: 400px;
    }
    .demo-card-wide > .mdl-card__title {
        height: 100px;
    }
</style>

<main class="mdl-layout__content">
    <div class="page-content ">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp ">
                    <div class="mdl-card__title">
                        <h2 class="mdl-card__title-text">Cadastro de Professor</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <form name="Cadastro de Professor" action="../action/professorInsert.php" method="POST" enctype="multipart/form-data">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="number" required="required" pattern="-?[0-9]*(\.[0-9]+)?" name="matricula" id="matricula">
                                <label class="mdl-textfield__label" for="matricula">Matricula</label>
                                <span class="mdl-textfield__error">Informe uma matricula numérica!</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="nomeProfessor" id="nomeProfessor">
                                <label class="mdl-textfield__label" for="nomeProfessor">Nome Professor</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" required="required" name="salarioHora" id="salarioHora">
                                <label class="mdl-textfield__label" for="salarioHora">Salário Hora</label>
                                <span class="mdl-textfield__error">Fomato decimal como: 23.55</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="email" required="required" name="email" id="email">
                                <label class="mdl-textfield__label" for="email">E-mail</label>
                                <span class="mdl-textfield__error">email@servidor.com.br</span>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="file" name="curriculo" id="curriculo">
                                <label class="mdl-textfield__label" for="curriculo">Currículo</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="image" name="foto" id="foto">
                                <label class="mdl-textfield__label" for="foto">Foto</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-checkbox__input" type="checkbox" name="status" id="status" checked value="1">
                                <label class="mdl-checkbox__label" for="status">Status</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-checkbox__input" type="checkbox" name="coordenardor" id="coordenardor">
                                <label class="mdl-checkbox__label" for="coordenardor">Coordenardor</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-checkbox__input" type="checkbox" name="PF" id="PF">
                                <label class="mdl-checkbox__label" for="PF">Pessoa Física</label>
                            </div>
                            <br>
                            <a class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab" href="javascript:void(0)" id="addTelefone">
                                <i class="material-icons">add</i>
                            </a>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="campoDinamico">

                            </div>

                            </br>
                            <input type="submit" name="acao" value="Salvar" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
                            <input type="reset" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored"/>
                            <a class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="<?php echo BASE_URL; ?>/index.php" id="addTelefone">
                                Cancelar
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "../template/footer.php" ?>
<script>
    $(function () {
        var scntDiv = $('#campoDinamico');
        $(document).on('click', '#addTelefone', function () {
            $('<p>' +
                    '<input class="mdl-textfield__input" type="tel" name="numTelefone[]" id="numTelefone"/>' +
                    '<label class="mdl-textfield__label" for="numTelefone">' +
                    'Telefone' +
                    '</label>' +
                                       
                    '<input class="mdl-checkbox__input" type="checkbox" name="numPrincipal[]" id="numPrincipal" />' +
                    '<label class="mdl-checkbox__label" for="numPrincipal">Núm. Principal</label>'+
                    '<a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="javascript:void(0)" id="remSelect">' +
                    ' Remover Telefone' +
                    ' </a>  ' +
                    '</p>').appendTo(scntDiv);
            return false;
        });
        $(document).on('click', '#remSelect', function () {
            $(this).parents('p').remove();
            return false;
        });
    });
</script>