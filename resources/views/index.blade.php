<!DOCTYPE html>
<html lang="en">
<head>
	<title>Atividade Avaliativa – Seguro Prestamista</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('images/icons/favicon.ico') }}"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
	<!--===============================================================================================-->
</head>
<body>

	<img class="lideranca" src="{{ asset('images/logo-topo21-white.png') }}">

	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="/book/quiz/public/pesquisar" method="post">
				@csrf
				<span class="contact100-form-title">
					Atividade Avaliativa – Seguro Prestamista
					<p class="contact100-form-title2">(Cada questão vale 1,0) -  <font color="red">Atenção com a Barra de Rolagem nas respostas</font> </p>

					
				</span>


				@if(Session::has('success'))<div class="alert alert-success boxalert" role="alert">{{ Session::get('success') }}</div>@endif
				@if(Session::has('danger'))<div class="alert alert-danger boxalert" role="alert">{{ Session::get('danger') }}</div>@endif
				@if($errors->any())<div class="box boxalert">@foreach($errors->all() as $error) <div class="alert alert-danger" role="alert">{{ $error }}
				</div>@endforeach
			</div>@endif 



			<div class="wrap-input200 validate-input" data-validate="Obrigatorio seu nome">
				<span class="label-input100">Matricula</span>
				<input class="input100" type="text" name="matricula" placeholder="Matricula"  value="{{old('matricula')}}">
				<span class="focus-input100"></span>

			</div>

			<div class="wrap-input200 validate-input" data-validate="Nome">
				<span class="label-input100">Nome</span>
				<input class="input100" type="text" name="nome" placeholder="Entre com seu nome" value="{{old('nome')}}">
				<span class="focus-input100"></span>

			</div>

			<div class="wrap-input200 validate-input" data-validate = "Obrigatorio nome Instrutor">
				<span class="label-input100">Nome Supervisor</span>
				<input class="input100" type="text" name="nomesup" placeholder="Nome Supervisor" value="{{old('nomesup')}}">
				<span class="focus-input100"></span>
			</div>




			<div class="wrap-input100 input100-select">
				<span class="label-input100">1-Cliente deseja acionar o seguro novamente, como devemos proceder nessa situação?</span>
				<div>
					<select class="selection-2" name="Q1" id="Q1">
						<option>Escolha a alternativa correta</option>
						<option value="A"  @if (old('Q1') == 'A') selected="selected" @endif>A -	Identificar se o cliente está dentro da cobertura do Seguro.</option>
						<option value="B"  @if (old('Q1') == 'B') selected="selected" @endif>B -	Verificar se o contrato possui o Seguro.</option>
						<option value="C"  @if (old('Q1') == 'C') selected="selected" @endif>C -	Abrir a OCTA para a fila 1MD com o motivo do direcionamento.</option>
						<option value="D"  @if (old('Q1') == 'D') selected="selected" @endif>D -	Informar o telefone da Seguradora para que ele verifique se é possível acionar o seguro novamentes.</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>


			<div class="wrap-input100 input100-select">
				<span class="label-input100">2-Esposa do cliente deseja acionar o seguro, pois está com dificuldade de efetuar o pagamento devido estar 	desempregada, o que fazer nessa situação?</span>
				<div>
					<select class="selection-2" name="Q2" id="question2">
						<option>Escolha a alternativa correta</option>
						<option value="A"  @if (old('Q2') == 'A') selected="selected" @endif>A -	Abrir a OCTA para a fila 1MD com o motivo do direcionamento.</option>
						<option value="B"  @if (old('Q2') == 'B') selected="selected" @endif>B -	Informar que a cobertura do seguro é somente para o titular do contrato.</option>
						<option value="C"  @if (old('Q2') == 'C') selected="selected" @endif>C -	Passar o telefone da Seguradora para que ela verifique se é possível acionar o seguro.</option>
						<option value="D"  @if (old('Q2') == 'D') selected="selected" @endif>D -	Verificar se o contrato possui o Seguro Prestamista.</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>


			<div class="wrap-input100 input100-select">
				<span class="label-input100">3-Cliente está com 3 parcelas em atraso e deseja acionar o seguro, pois perdeu o emprego e gostaria de 	saber se é possível cobri-las. Qual a orientação devemos passar para o cliente?</span>
				<div>
					<select class="selection-2" name="Q3" id="question3">
						<option>Escolha a alternativa correta</option>
						<option value="A"  @if (old('Q3') == 'A') selected="selected" @endif>A -	Que se ele for elegível, a seguradora efetuará o pagamento das 3 parcelas.</option>
						<option value="B"  @if (old('Q3') == 'B') selected="selected" @endif>B -	A seguradora paga somente 2 parcelas e o valor que ficar em aberto deverá ser pago pelo cliente.</option>
						<option value="C"  @if (old('Q3') == 'C') selected="selected" @endif>C -	A seguradora fará uma análise sobre o perfil do cliente e se ele for elegível pagará as 3 parcelas.</option>
						<option value="D"  @if (old('Q3') == 'D') selected="selected" @endif>D -	Ele terá que verificar na seguradora, pois se for elegível, a quantidade de parcelas a serem pagas dependerá da apólice dele e somente a seguradora poderá informar a cobertura que ele possui.</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>


			<div class="wrap-input100 input100-select">
				<span class="label-input100">4-O contrato está em cobrança judicial e não podemos negociar, porém, o cliente quer acionar o seguro 	prestamista do seu contrato. Qual procedimento seguir?</span>
				<div>
					<select class="selection-2" name="Q4">
						<option>Escolha a alternativa correta</option>
						<option value="A"  @if (old('Q4') == 'A') selected="selected" @endif>A -	Pedir que entre em contato com a seguradora para mais informações sobre cobertura.</option>
						<option value="B"  @if (old('Q4') == 'B') selected="selected" @endif>B -	Solicitar que solicite o acionamento pelo escritório responsável pela cobrança no momento.</option>
						<option value="C"  @if (old('Q4') == 'C') selected="selected" @endif>C -	Verificar com o cliente o motivo do direcionamento e caso esteja dentro dos itens de cobertura, realizar a abertura da OCTA para a fila 1MD.</option>
						<option value="D"  @if (old('Q4') == 'D') selected="selected" @endif>D -	Informar que como ele está em cobrança judicial o contrato não está mais elegível para acionar o seguro.</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>


			<div class="wrap-input100 input100-select">
				<span class="label-input100">5-O cliente é autônomo e está com dificuldade de efetuar o pagamento da parcela pois sofreu um 	acidente que o está impossibilitando de trabalhar no momento. Ele deseja acionar o seguro prestamista, que orientação devemos passar para esse cliente?</span>
				<div>
					<select class="selection-2" name="Q5">
						<option>Escolha a alternativa correta</option>
						<option value="A"  @if (old('Q5') == 'A') selected="selected" @endif>A -	Informar que o seguro prestamista não tem cobertura para cliente autônomo.</option>
						<option value="B"  @if (old('Q5') == 'B') selected="selected" @endif>B -	Passar o telefone da Seguradora para que ele entre em contato e verifique se é elegível.</option>
						<option value="C"  @if (old('Q5') == 'C') selected="selected" @endif>C -	Informar que ele poderá acionar a seguradora por motivo de Incapacidade Física temporária por Acidente.</option>
						<option value="D"  @if (old('Q5') == 'D') selected="selected" @endif>D -	Informar que ele poderá acionar a seguradora por motivo de Invalidez Permanente Total por Acidente.</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">6-O cliente adquiriu o financiamento há 5 meses e deseja acionar o seguro, pois está  	desempregado. Quais as análises iniciais preciso fazer antes de direcioná-lo para a Seguradora?</span>
				<div>
					<select class="selection-2" name="Q6">
						<option>Escolha a alternativa correta</option>
						<option value="A"  @if (old('Q6') == 'A') selected="selected" @endif>A -	Tempo de Registro de Trabalho, tempo que está desempregado e se a demissão foi voluntária involuntária.</option>
						<option value="B"  @if (old('Q6') == 'B') selected="selected" @endif>B -	Não é necessário fazer nenhuma análise, se o contrato possui o seguro o cliente tem o direito de acioná-lo.</option>
						<option value="C"  @if (old('Q6') == 'C') selected="selected" @endif>C -	Data de emissão do contrato, idade do cliente e status do seguro.</option>
						<option value="D"  @if (old('Q6') == 'D') selected="selected" @endif>D -	Data de emissão do contrato, idade do cliente e status do seguro e em que dia/ mês ocorreu o desemprego.</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">7-Qual o prazo que o cliente tem para enviar a documentação no caso de desemprego?</span>
				<div>
					<select class="selection-2" name="Q7">
						<option>Escolha a alternativa correta</option>
						<option value="A"  @if (old('Q7') == 'A') selected="selected" @endif>A -	2 dias úteis.</option>
						<option value="B"  @if (old('Q7') == 'B') selected="selected" @endif>B -	3 dias úteis.</option>
						<option value="C"  @if (old('Q7') == 'C') selected="selected" @endif>C -	3 dias corridos.</option>
						<option value="D"  @if (old('Q7') == 'D') selected="selected" @endif>D -	2 dias corridos.</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">8-Qual o prazo que o notificante tem para enviar a documentação no caso de morte do titular?</span>
				<div>
					<select class="selection-2" name="Q8">
						<option>Escolha a alternativa correta</option>
						<option value="A"  @if (old('Q8') == 'A') selected="selected" @endif>A -	2 dias úteis</option>
						<option value="B"  @if (old('Q8') == 'B') selected="selected" @endif>B -	5 dias úteis</option>
						<option value="C"  @if (old('Q8') == 'C') selected="selected" @endif>C -	5 dias corridos</option>
						<option value="D"  @if (old('Q8') == 'D') selected="selected" @endif>D -	2 dias corridos</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">9-O cliente ficou 8 meses desempregado e há 2 meses voltou a trabalhar, porém deseja acionar o seguro 	por motivo de desemprego, esse procedimento é possível?</span>
				<div>
					<select class="selection-2" name="Q9">
						<option>Escolha a alternativa correta</option>
						<option value="A" @if (old('Q9') == 'A') selected="selected" @endif>A -	Sim, pois a soma dos dois períodos não ultrapassa 1 ano</option>
						<option value="B" @if (old('Q9') == 'B') selected="selected" @endif>B -	Não, pois esse acionamento é somente para cliente que está desempregado</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>

			<div class="wrap-input100 input100-select">
				<span class="label-input100">10- Cliente deseja realizar a quitação do contrato, porém o mesmo se encontra com sinistro em análise, como proceder nessa situação?</span>
				<div>
					<select class="selection-2" name="Q0">
						<option>Escolha a alternativa correta</option>
						<option value="A" @if (old('Q0') == 'A') selected="selected" @endif>A -	Orientar o cliente esperar a resposta final da seguradora, pois não é possível verificar o valor da Devolução de prêmio.</option>
						<option value="B" @if (old('Q0') == 'B') selected="selected" @endif>B -	Gerar o boleto com o valor aproximado para quitação e solicitar que o cliente entre em contato com a seguradora para obter informações sobre a devolução de prêmio. </option>
						<option value="C" @if (old('Q0') == 'C') selected="selected" @endif>C - 	Não é possível gerar o boleto para quitação, sem a informação da devolução de prêmio, pois poderá gerar valores divergentes</option>
						<option value="D" @if (old('Q0') == 'D') selected="selected" @endif>D -	Pedir que o cliente verifique o valor da devolução de prêmio com a seguradora e depois entre em contato com o Call Center para gerarmos o boleto para quitação</option>
					</select>
				</div>
				<span class="focus-input100"></span>
			</div>




			<div class="container-contact100-form-btn">
				<div class="wrap-contact100-form-btn">
					<div class="contact100-form-bgbtn"></div>
					<button class="contact100-form-btn">
						<span>
							Enviar Pesquisa
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</div>
		</form>
	</div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<script>
	$(".selection-2").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect1')
	});
</script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
<script src="{{ asset('js/main.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="{{ asset('js/js.js') }}"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
