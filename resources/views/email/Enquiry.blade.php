<table border="1" width="500">
    <tr>
        <td>Name</td>
        <td>{{$enquiry->name}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$enquiry->email}}</td>
    </tr>
    <tr>
        <td>Mobile</td>
        <td>{{$enquiry->mobile}}</td>
    </tr>
    <tr>
        <td>Business Name</td>
        <td>{{$enquiry->business_name}}</td>
    </tr>
    <tr>
        <td>Website</td>
        <td>{{$enquiry->website}}</td>
    </tr>

    <tr>
        <td>Message</td>
        <td>{{$enquiry->message}}</td>
    </tr>
    <tr>
        <td>Services</td>
        <td><?php
            echo str_replace('.', ',<br>', $enquiry->services);
            ?></td>
    </tr>
</table>
