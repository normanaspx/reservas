@extends('layouts.app')
@section('content')
<div class="container">
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	  <h1 class="display-4">Servicios</h1>
	  <p class="lead" id="quienes"><br></p>
	  <nav aria-label="Page navigation example">
	    <ul class="pagination">
	      <li class="page-item"><a class="page-link" href="{{url('/return')}}">Ida</a></li>
	      <li class="page-item"><a class="page-link" href="{{url('/departure')}}">Retorno</a></li>
	    </ul>
	  </nav>
	</div>
	<table class="table">
	  <caption>List of users</caption>
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Tipo de bus</th>
	      <th scope="col">Origen</th>
	      <th scope="col">Destino</th>
	      <th scope="col">Horario de salida</th>
		 <th scope="col">Precio</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row" rowspan="12" class="align-middle">Especiales</th>
	      <td rowspan="12" class="align-middle">Zona 1 y Centra Norte Zona 18 Guatemala</td>
	      <td>Póptun, Petén</td>
	      <td rowspan="2" class="align-middle">7:00:00 a. m.</td>
		 <td>Q145</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
	      <td>Q160.00</td>
	    </tr>

	    <tr>
	      <td>Póptun, Petén</td>
	      <td  rowspan="2" class="align-middle">10:00:00 a. m.</td>
		 <td>Q145.00</td>
	    </tr>
	    <tr>
		 <td>Santa Elena, Petén</td>
		 <td>Q160.00</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td  rowspan="2" class="align-middle">02:00:00 p. m.</td>
	      <td>Q145.00</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
	      <td>Q160.00</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td  rowspan="2" class="align-middle">06:00:00 p. m.</td>
		 <td>Q160.00</td>
	    </tr>
	    <tr>
		 <td>Santa Elena, Petén</td>
		 <td>Q175.00</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
		 <td  rowspan="2" class="align-middle">08:00:00 p. m.</td>
		       <td>Q170.00</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td>Q185.00</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
	      <td  rowspan="2" class="align-middle">10:00:00 p. m.</td>
	    	   <td>Q180</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td>Q200</td>
	    </tr>
	  </tbody>
	</table>



	<table class="table">
	  <caption>List of users</caption>
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Tipo de bus</th>
	      <th scope="col">Origen</th>
	      <th scope="col">Destino</th>
	      <th scope="col">Horario de salida</th>
		 <th scope="col">Precio</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row" rowspan="12" class="align-middle">Oro</th>
	      <td rowspan="12" class="align-middle">Zona 1 y Centra Norte Zona 18 Guatemala</td>
	      <td>Póptun, Petén</td>
	      <td rowspan="2" class="align-middle">7:00:00 a. m.</td>
		 <td>Q135</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
	      <td>Q150</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td  rowspan="2" class="align-middle">10:00:00 a. m.</td>
		 <td>Q135</td>
	    </tr>
	    <tr>
		 <td>Santa Elena, Petén</td>
		 <td>Q150</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td  rowspan="2" class="align-middle">02:00:00 p. m.</td>
		 <td>Q135</td>
	    </tr>
	    <tr>
		 <td>Santa Elena, Petén</td>
		 <td>Q150</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td  rowspan="2" class="align-middle">06:00:00 p. m.</td>
		 <td>Q145</td>
	    </tr>
	    <tr>
		 <td>Santa Elena, Petén</td>
		 <td>Q160</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
		 <td  rowspan="2" class="align-middle">08:00:00 p. m.</td>
		       <td>Q150</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td>Q170</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
	      <td  rowspan="2" class="align-middle">10:00:00 p. m.</td>
	    	   <td>Q160</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td>Q180</td>
	    </tr>
	  </tbody>
	</table>


	<table class="table">
	  <caption>List of users</caption>
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Tipo de bus</th>
	      <th scope="col">Origen</th>
	      <th scope="col">Destino</th>
	      <th scope="col">Horario de salida</th>
		 <th scope="col">Precio</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <th scope="row" rowspan="12" class="align-middle">Regular</th>
	      <td rowspan="12" class="align-middle">Zona 1 y Centra Norte Zona 18 Guatemala</td>
	      <td>Póptun, Petén</td>
	      <td rowspan="2" class="align-middle">7:00:00 a. m.</td>
		 <td>Q120</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
	      <td>Q135</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td  rowspan="2" class="align-middle">10:00:00 a. m.</td>
		 <td>Q120</td>
	    </tr>
	    <tr>
		 <td>Santa Elena, Petén</td>
		 <td>Q135</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td  rowspan="2" class="align-middle">02:00:00 p. m.</td>
	      <td>Q120</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
	      <td>Q135</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td  rowspan="2" class="align-middle">06:00:00 p. m.</td>
		 <td>Q145</td>
	    </tr>
	    <tr>
		 <td>Santa Elena, Petén</td>
		 <td>Q130</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
		 <td  rowspan="2" class="align-middle">08:00:00 p. m.</td>
		 <td>Q145</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td>Q170</td>
	    </tr>
	    <tr>
	      <td>Santa Elena, Petén</td>
	      <td  rowspan="2" class="align-middle">10:00:00 p. m.</td>
	    	   <td>Q160</td>
	    </tr>
	    <tr>
	      <td>Póptun, Petén</td>
	      <td>Q180</td>
	    </tr>
	  </tbody>
	</table>
</div>
@stop
