@extends('layouts.app')

@section('content')
<script> 
	$(function() { 
		var companies = [ 
		"MARIA LUZIA BORGES ",
"FRANCISCO REGIS MATR",
"JALES MATERIAL",
"KI PRECO MATERIAL",
"S M S SUPERMERCADOS LTDA ME",
"BETANIA MARIA",
"W DA SILVA ME",
"JOSE F DA SILVA",
"NATAL TECH LTDA",
"AVERN",
"JOSIMAR MOTA ",
"E C DE ALMEIDA MOTA",
"ATUAL SUPERMERCADO ",
"NUCLEO FISIOTERAPIA",
"INSTITU DE ATIVIDADE",
"ROMERO E BEZERRA",
"MIX INTERNET",
"APCEFRN",
"PIRES E SILVA ",
"ACEAN AVELINO DANTAS",
"INFINITY IDIOMAS LTDA ME",
"INJOR IDIOMAS LTDA ME",
"LIBERTY IDIOMAS LTDA ME",
"ZETA CONSTRUCAO CIVIL LTDA - EPP",
"KI PRECO MATERIAL DE CONSTRUCAO LTDA ME",
"W D SANTINO COMERCIO VAREJISTA LTDA - ME",
"C C DE ANDRADE ",
"CLAUDIO C ARAUJO ME",
"CRUZ & SILVA SUPERME",
"F DAS CHAGAS",
"F J COMERCIO",
"PMP DISTRIBUIDORA",
"LEDA DE OLIVEIRA",
"SUP VAREJISTA CVERDE",
"APS",
"LOJAS MEIRA LTDA",
"RESTAURANTE BOMFIM",
"W B COM E SERVICOS",
"W B COMERCIO DEPOSITO",
"AVANCE TECNOLOGIA E SERVICOS LTDA - ME",
"PANIFICADORA SAO MIGUEL LTDA ME",
"PANIFICADORA SAO MIGUEL LTDA ME",
"PANIFICADORA SAO MIGUEL LTDA ME",
"MIGUEL, IRMAOS & CIA LTDA - ME",
"DISPAN DIST E COM PROD PANIF LTDA",
"DISPAN DIST E COM PROD PANIF LTDA",
"DISPAN DIST E COM PROD PANIF LTDA",
"LEDA DE OLIVEIRA DANTAS EPP",
"CASS AUDITORES E CONSULTORES S/S",
"FLORESTA MOVEIS LTDA - EPP",
"FLORESTA MOVEIS LTDA - EPP",
"FLORESTA MOVEIS LTDA - EPP",
"FLORESTA MOVEIS LTDA - EPP",
"FLORESTA MOVEIS LTDA - EPP",
"AB COMPUTACAO MATRIZ",
"DILSA PEREIRA MATRIZ",
"L & C SUPERMERCADO",
"NAPOLEAO JUNIOR",
"S R DA SILVA",
"SUP AGUAS CLARAS",
"MOTO LUB",
"M?ELIENE SOUZAMATRIZ",
"DALVANIRA JORGE",
"SUP ASA NORTE",
"SUP ALTO ALVORADA",
"M?ELIENE SOUZA FILIAL",
"COM DANTAS E PEREIRA",
"E A COMERCIAL MATRIZ",
"COM DOIS IRMAOS LTDA",
"GEOVIA ENGENHARIA",
"OZAY BENTO DE MORAIS",
"DILSA PEREIRA FILIAL",
"SUP LOPES LTDA",
"SUP PROGRESSO LTDA",
"SUP SAO BERNARDO",
"KGG COMERCIAL DE MAT",
"SUP SANTA RITA",
"RODRIGUES & SILVA SUP LTDA EPP",
"DENILSON LUCIO DA COSTA EIRELI -ME",
"LUCCA DISTRIBUIDORA DE BEBIDAS LTDA",
"SUP SAO BERNARDO LTDA ME",
"SUP TAKEMURA LTDA - ME",
"C & L MERCADI MATRIZ",
"ANTONIO TEIXEIRA ",
"J AZEVEDO & FATIMA",
"J F NOGUEIRA ME",
"JONATAS GOMES",
"M L CONSTRUCOES LTDA",
"SUP CASAVERDE MATRIZ",
"SUP LIMA SILVAMATRIZ",
"CLODOALDO JORGE",
"L A DE AZEVEDO",
"LUIZ & SILVA SUPER",
"SUP LIMA SILVA FILIAL",
"A B COMPUTACAO FILIA",
"C & L MERCAD FILIAL",
"SUP CASAVERDE FILIAL",
"M? DAS GRACAS NASCIM",
"DROG MAE DAS DORES",
"SUP SERIDO LTDA",
"M? DAS GRA?AS NASCIM",
"FABIO CANINDE",
"E A COMERCIAL FILIAL",
"K G GON?ALVES ME F",
"K G GONCALVES ME MA",
"CASA FORTE MATERIAL ",
"JOAO DIAS PESSOA",
"MOSSORO CAP",
"ASSOC NOSSA GENTE",
"J M DE AMORIM NETO",
"R M DE OLIVEIRA ",
"COMERCIAL A & F LTDA",
"A CELESTINO SOBRINHO",
"MC JOSIENE VALENTIM",
"MARCELO E RADIR",
"OLIVEIRA E FRANCA",
"S C DE SOUZA DANTAS",
"B E B COMERCIO",
"M ANTONIO LUCENA DA CUNHA",
"M ANTONIO LUCENA DA CUNHA",
"R M DE BARROS LTDA ME",
"RISCO ZERO ASSES EM ENG DE SEG DO TRAB LTDA ME",
"BOMBONIERE NOVA VIDA",
"SUP PONTO KENTE MATRIZ",
"SUP MS BARROS MATRIZ",
"NORDESTE POTIGUAR",
"VALDINALVA FARIAS",
"SUP PONTO KENTE I",
"SUP PONTO KENTE II",
"S M B DE A BARROS",
"SUP MS BARROS FILIAL",
"CLODOALDO FONSECA",
"ESTOQUE COMERCIAL ",
"SUP CATOLE LTDA",
"LAURENTINO SUPER",
"L DE LIMA SANTOS ME",
"F LECY FERREIRA",
"EURIMAR MEDEIROS",
"SUP PONTO KENTE III",
"SUP CATOLE DEPOSITO ",
"SUP CATOLE DEPOSITO",
"F LECY DEPOSITO",
"CLODOALDO F DEPOSITO",
"SUP NOSSO LAR LTDA ME",
"SUP M S BARROS LTDA",
"CLODOALDO F - ATACADO",
"ALESSANDRO LOPIS DE FIGUEIREDO - ME",
"JULIO ETELVINO MEDEIROS - ME",
"GUILHERME E LOPES",
"JOSE FCO DE AZEVEDO",
"SEVERINO PEREIRA",
"CARLOS EGBERTO F DE ",
"JOKS FASHION",
"MC DE FATIMA SOUZA",
"DROG BATISTA E DANTA",
"G C DE AQUINO MATRIZ",
"R G ARQUITETURA",
"CERAMICA UNIAO LV",
"COMERCIAL DE PAES VE",
"C S REPRESENTACOES",
"ANNA LUIZA TARGINO",
"SABINO & SIQUEIRA LTDA ME",
"J S MATERIAL MATRIZ",
"MC DO CARMO DA SILVA",
"MOTO SUL",
"C E A DISTRIBUIDORA ",
"SUPER SHOW LOGISTICA",
"DPP AMORIM",
"APS LOGISTICA",
"COSTA E DANTAS LTDA ",
"F5 ONLINE SOLUCOES",
"OTOCAP",
"J S MATERIAL FILIAL",
"IELMO MARINHO LOTARI",
"FISIO LIFE FIS E PILATES LTDA",
"FUNDACAO DULCE FREIRE",
"S M F FILGUEIRAS - ME",
"MARILIA AVELINO DA SILVA - ME",
"ELITE CONTADORES",
"JUPITER COM LTDA ME",
"ELITE CONSULTORES",
"MARIA DA PAZ JORGE",
"SUPERCOP COOPERATIVA",
"COSTA E RODRIGUES",
"PAN SAO FRANCISCO",
"ISABEL CRISTINA PINHEIRO MAFALDO",
"L M R SANTIAGO",
"R CARLOS SANTIAGO",
"CORPO MOLHADO MODA PRAIA E FITNESS LTDA",
"THIAGO CID CITRON DA SILVA PEREIRA 06889589408",
"A J COMERCIO MATRIZ",
"A J COMERCIO FILIAL",
"SUPERCOP LOGISTICA ",
"G C DE AQUINO FILIAL",
"ADRIANA CORDEIRO",
"RONALD DE GOIS",
"AELSON TURISBUGGY",
"MC L DE ARAUJO",
"MATERIAL BELCHIOR",
"LIDNA & OSMAR",
"BR HOSPITALAR",
"BRASIL HOSPEDA",
"V DE SOUZA FILHO PADARIA - ME",
"C E LUZ MORA ME",
"OFICINA DA ARTE LTDA ME",
"SANTE SERVICOS DE SAUDE LTDA - ME",
"O MOVELEIRO COMERCIO E SERVICOS LTDA ME",
"RH SER CONSULTORIA EMPRESARIAL - RH SER LTDA - ME",
"LJ ALLIANCE - LJ ALLIANCE CORRETORA DE SEGUROS LTDA - ME",
"OK COMERCIO E SERVICOS LTDA - ME",
"BIANCA COSTA ANTUNES DE SOUZA - ME" ]; 
		$("#task-company" ).autocomplete({ 
			source: companies 
		}); 
	}); 
</script>

	<div class="container">
		<div class="col-sm-offset-1 col-sm-11">
			<div class="panel panel-default">
				<div class="panel-heading">
					Novo Chamado
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

					<!-- New Task Form -->
					<form action="/task" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Task Name -->
						<div class="form-group">
			            <label for="task-name" class="col-sm-3 control-label">Nome do Cliente</label>
               			<div class="col-sm-8">
                  		<input type="text" name="name" id="task-name" class="form-control">
                		</div>	                														
						</div>
						<div class="form-group">
			            <label for="task-company" class="col-sm-3 control-label">Empresa</label>
               			<div class="col-sm-8">
                  		<input type="text" name="company" id="task-company" class="form-control">
                		</div>	                														
						</div>
						<div class="form-group">
			            <label for="task-doubtsector" class="col-sm-3 control-label">Dúvida correspondente ao Setor</label>
               			<div class="col-sm-8">
                  		<select class="form-control" id="doubtsector" name="doubtsector">
  						<option value="Administrativo">Administrativo</option>
  						<option value="Contábil">Contábil</option>
  						<option value="Fiscal">Fiscal</option>
  						<option value="Pessoal">Pessoal</option>
 						<option value="Relacionamento">Relacionamento</option>
						</select>
                		</div>	                														
						</div>
						<div class="form-group">
			            <label for="task-doubt" class="col-sm-3 control-label">Dúvida</label>
               			<div class="col-sm-8">
               			<textarea class="form-control" rows="3" id="doubt" name="doubt"></textarea>
                		</div>	                														
						</div>					
						<!-- Add Task Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="fa fa-btn fa-plus"></i>Adicionar Chamado
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>


		</div>
	</div>

@endsection
