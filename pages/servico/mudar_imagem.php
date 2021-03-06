
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"> Serviço </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Confirme as informações para a exclusão do serviço
            </div>
            <div class="panel-body">
                <div class="row">
                	<form role="form" id="formcad" method="post" enctype="multipart/form-data">
                        <div class="col-lg-6">		
                            <div class="form-group">
                                <label> Titulo </label>
                                <input class="form-control" name="titulo" placeholder="Título para o serviço" disabled="disabled" value="<?php if($resbd) echo $resbd->titulo; ?>">
                            </div>
                            <div class="form-group">
                                <label>Descrição </label>
                                <textarea class="form-control" rows="3" name="descricao" disabled="disabled" placeholder="Breve descrição contendo as informações principais.">
                                	<?php if($resbd) echo $resbd->descricao; ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                            	<label> Imagem </label>
                            	<div class="form-group input-group">
                            		<span class="input-group-addon"> <i class="fa fa-photo fa-fw"></i> </span>
                                	<input required=""  name="imagem" type="file">
                            	</div>
                            	<?php if($resbd) printf('<img class="img_servico" src="servico/%s" alt="Novo Cadastro"/>', $resbd->nome_imagem); ?>
                            </div>
                           <!-- <div class="form-group">
                                <label> Apresentação </label>
                                <label class="radio-inline">
                                    <input type="radio" name="apresentacao" disabled="disabled" id="optionsRadiosInline1" value="1" checked> Sim
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" checked="checked" disabled="disabled" name="apresentacao" id="optionsRadiosInline2" value="2"> Não
                                </label>
                           </div> -->
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">
                        	<div class="form-group">
                                <label> Serviço </label>
                                <div class="form-group input-group">
	                                <span class="input-group-addon"> <i class="fa fa-steam fa-fw"></i> </span>
	                                 <select class="form-control" name="servico" disabled="disabled">
	                                    <option value="Engenharia" <?php if($resbd->tipo_servico == 'Engenharia') echo 'selected="selected"'; ?> > Engenharia </option>
	                                    <option value="Saneamento" <?php if($resbd->tipo_servico == 'Saneamento') echo 'selected="selected"'; ?> > Saneamento </option>
	                                    <option value="Obras" <?php if($resbd->tipo_servico == 'Obras') echo 'selected="selected"'; ?> > Obras </option>
	                                </select>
	                            </div>
                            </div>
                        	<div class="form-group">
                                <label> Texto </label>
                                <textarea class="form-control" rows="22" name="texto" disabled="disabled" placeholder="Texto contendo todas as informações necessárias">
                                	<?php if($resbd) echo $resbd->texto; ?>
                                </textarea>
                            </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                        <div class="col-lg-6">
                        	<div class="form-group">
	                        	<input class="btn btn-success" type="submit" name="editar_imagem" value="Editar Imagem" />
	                        </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                   </form>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->