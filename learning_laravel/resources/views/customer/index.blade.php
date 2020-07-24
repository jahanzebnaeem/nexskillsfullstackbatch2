<h1>List of Customers</h1>

<a href="/customers/create">Add Customer</a>

@forelse ($customers as $customer)
    <p><strong>{{ $customer->name }}</strong> ({{ $customer->email }}) </p>
@empty
    <p>No Customers Added.</p>
@endforelse

