<h3>Form Customers</h3>
<form action="{{ route('customers.store') }}" method="POST">
    {{ csrf_field() }}
    <label>Customers Name</label>
    <input type="text" name="customers_name">
    <br>
    <label>Email</label>
    <input type="email" name="email">
    <br>
    <label>Phone</label>
    <input type="number" name="phone">
    <br>
    <label>Address</label>
    <textarea name="address"></textarea>
    <br>
    <label>Member Status</label>
    <input type="radio" name="member_status" value=1> Member
    <input type="radio" name="member_status" value=0 checked > Non-Member
    </br>
    <button type="submit">Save</button>
    <a href={{ route('customers.index') }}>Cancel</a>
</form>
