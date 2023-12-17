<x-app-layout>
	<x-slot name="header">
		<h2 class="font-semibold text-xl text-gray-800 leading-tight">
			{{ __('Tenants') }}
			<x-btn-link class="ml-4 float-right" href="{{ route('tenants.create') }}">Add Tenant</x-btn-link>
		</h2>
	</x-slot>

	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-6 text-gray-900">
					<div class="relative overflow-x-auto">
						<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
							<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:bg-gray-400">
								<tr>
									<th scope="col" class="px-6 py-3">Name</th>
									<th scope="col" class="px-6 py-3">Email</th>
									<th scope="col" class="px-6 py-3">Domain</th>
									<th scope="col" class="px-6 py-3">Created At</th>
									<th scope="col" class="px-6 py-3">Action</th>
								</tr>
							</thead>
							<tbody>

								@foreach ($tenants as $tenant)
								<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
									<td>{{$tenant->name}}</td>
									<td>{{$tenant->email}}</td>
									<td>

										@foreach ($tenant->domains as $domain)
										<a href="{{'http://'.$domain->domain.':8000'}}" target="_blank">
											{{$domain->domain.':8000'}}
										</a>
										@endforeach


									</td>
									<td>{{$tenant->created_at}}</td>
									<td>Edit</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
</x-app-layout>