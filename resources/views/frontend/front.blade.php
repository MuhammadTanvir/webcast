@extends('layouts.app')

@section('content')

<div class="container">

	<section>
            <div>
                <b-jumbotron header="BootstrapVue" lead="Bootstrap v4 Components for Vue.js 2">
                    <p>For more information visit website</p>
                    <b-button variant="primary" href="{{ route('series.index') }}">Browse Course</b-button>
                </b-jumbotron>
            </div>
        </section>

	<section class="mb-5">
		<div>
			 <h3 class="mb-3 text-center">Become full stack developer</h3>
		  <b-card-group deck>
		  	
		  	@foreach ($featuredSeries as $series)
		  	<b-card title="" img-src="https://picsum.photos/300/300/?image=41" img-alt="Image" img-top>
		      <b-card-text>
		        {{ \Str::words($series->description,10) }}
		      </b-card-text>
		      <template #footer>
		        <small class="text-muted">Last updated 3 mins ago</small>
		      </template>
		    </b-card>

		  	@endforeach	    
		  </b-card-group>
		</div>
	</section>

	
	<section>
	 <h3 class="mb-3 text-center">Choose Plan that fits your need</h3>
	<pricing></pricing>
	</section>
	
	<div id="page-content">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h1 class="font-weight-light mt-4 text-white">Sticky Footer using Flexbox</h1>
                        <p class="lead text-white-50">Use just two Bootstrap 4 utility classes and three custom CSS rules and you will have a flexbox enabled sticky footer for your website!</p>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection