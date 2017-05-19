@extends('layouts.admin')

@section('content')
<script type="text/javascript">
$(window).load(function(){
	//$('.footable').footable();
	$('.footable').DataTable({
        "aaSorting": []
    });
});
</script>
<div class="page page-tables-footable"> 
			<!-- bradcome -->
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">FooTable Tables</h1>
						<small class="text-muted">Welcome to Oakleaf application</small> </div>
				</div>
			</div>
			
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<section class="boxs ">
						<div class="boxs-header dvd dvd-btm">
							<h1 class="custom-font"><strong>FooTable</strong> Example</h1>
							
						</div>
						<div class="boxs-body">
							<table id="searchTextResults" data-page-size="5" data-filter="#filter" class="footable table table-custom footable-loaded default">
								<thead>
									<tr>
										<th class="footable-visible footable-first-column footable-sortable">Name<span class="footable-sort-indicator"></span></th>
										<th class="footable-visible footable-sortable">Lastname<span class="footable-sort-indicator"></span></th>
										<th data-hide="phone" class="footable-visible footable-sortable">Username<span class="footable-sort-indicator"></span></th>
										<th data-hide="phone, tablet" class="footable-visible footable-sortable">Phone<span class="footable-sort-indicator"></span></th>
										<th data-hide="phone, tablet" class="footable-visible footable-last-column footable-sortable">Email<span class="footable-sort-indicator"></span></th>
									</tr>
								</thead>
								<tbody>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>John</td>
										<td class="footable-visible">smith</td>
										<td class="footable-visible">@mdo</td>
										<td class="footable-visible">4559411994</td>
										<td class="footable-visible footable-last-column">john@ymail.com</td>
									</tr>
									<tr class="footable-odd" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>karlos</td>
										<td class="footable-visible">tonar</td>
										<td class="footable-visible">@fat</td>
										<td class="footable-visible">5549659126</td>
										<td class="footable-visible footable-last-column">tonar@mail.com</td>
									</tr>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Mary</td>
										<td class="footable-visible">com</td>
										<td class="footable-visible">@twitter</td>
										<td class="footable-visible">315229694</td>
										<td class="footable-visible footable-last-column">com@yahoo.com</td>
									</tr>
									<tr class="footable-odd" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>akshay</td>
										<td class="footable-visible">kumar</td>
										<td class="footable-visible">@akky</td>
										<td class="footable-visible">1198456152</td>
										<td class="footable-visible footable-last-column">kumar@hotmail.com</td>
									</tr>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Larry</td>
										<td class="footable-visible">Cardl</td>
										<td class="footable-visible">@lurie</td>
										<td class="footable-visible">565465</td>
										<td class="footable-visible footable-last-column">larry@mail.com</td>
									</tr>
									<tr class="footable-odd" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>akshay</td>
										<td class="footable-visible">kumar</td>
										<td class="footable-visible">@akky</td>
										<td class="footable-visible">1198456152</td>
										<td class="footable-visible footable-last-column">kumar@hotmail.com</td>
									</tr>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Larry</td>
										<td class="footable-visible">Cardl</td>
										<td class="footable-visible">@lurie</td>
										<td class="footable-visible">565465</td>
										<td class="footable-visible footable-last-column">larry@mail.com</td>
									</tr><tr class="footable-odd" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>akshay</td>
										<td class="footable-visible">kumar</td>
										<td class="footable-visible">@akky</td>
										<td class="footable-visible">1198456152</td>
										<td class="footable-visible footable-last-column">kumar@hotmail.com</td>
									</tr>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Larry</td>
										<td class="footable-visible">Cardl</td>
										<td class="footable-visible">@lurie</td>
										<td class="footable-visible">565465</td>
										<td class="footable-visible footable-last-column">larry@mail.com</td>
									</tr><tr class="footable-odd" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>akshay</td>
										<td class="footable-visible">kumar</td>
										<td class="footable-visible">@akky</td>
										<td class="footable-visible">1198456152</td>
										<td class="footable-visible footable-last-column">kumar@hotmail.com</td>
									</tr>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Larry</td>
										<td class="footable-visible">Cardl</td>
										<td class="footable-visible">@lurie</td>
										<td class="footable-visible">565465</td>
										<td class="footable-visible footable-last-column">larry@mail.com</td>
									</tr><tr class="footable-odd" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>akshay</td>
										<td class="footable-visible">kumar</td>
										<td class="footable-visible">@akky</td>
										<td class="footable-visible">1198456152</td>
										<td class="footable-visible footable-last-column">kumar@hotmail.com</td>
									</tr>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Larry</td>
										<td class="footable-visible">Cardl</td>
										<td class="footable-visible">@lurie</td>
										<td class="footable-visible">565465</td>
										<td class="footable-visible footable-last-column">larry@mail.com</td>
									</tr><tr class="footable-odd" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>akshay</td>
										<td class="footable-visible">kumar</td>
										<td class="footable-visible">@akky</td>
										<td class="footable-visible">1198456152</td>
										<td class="footable-visible footable-last-column">kumar@hotmail.com</td>
									</tr>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Larry</td>
										<td class="footable-visible">Cardl</td>
										<td class="footable-visible">@lurie</td>
										<td class="footable-visible">565465</td>
										<td class="footable-visible footable-last-column">larry@mail.com</td>
									</tr><tr class="footable-odd" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>akshay</td>
										<td class="footable-visible">kumar</td>
										<td class="footable-visible">@akky</td>
										<td class="footable-visible">1198456152</td>
										<td class="footable-visible footable-last-column">kumar@hotmail.com</td>
									</tr>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Larry</td>
										<td class="footable-visible">Cardl</td>
										<td class="footable-visible">@lurie</td>
										<td class="footable-visible">565465</td>
										<td class="footable-visible footable-last-column">larry@mail.com</td>
									</tr><tr class="footable-odd" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>akshay</td>
										<td class="footable-visible">kumar</td>
										<td class="footable-visible">@akky</td>
										<td class="footable-visible">1198456152</td>
										<td class="footable-visible footable-last-column">kumar@hotmail.com</td>
									</tr>
									<tr class="footable-even" style="display: table-row;">
										<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Larry</td>
										<td class="footable-visible">Cardl</td>
										<td class="footable-visible">@lurie</td>
										<td class="footable-visible">565465</td>
										<td class="footable-visible footable-last-column">larry@mail.com</td>
									</tr>
								</tbody>
								
							</table>
						</div>
					</section>
				</div>
			</div>
		</div>			
@endsection
