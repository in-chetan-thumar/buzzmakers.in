<table border="1">
<tr>
    <td>Name</td>
    <td>{{$contact->name}}</td>
</tr>
    <tr>
        <td>Email</td>
    <td>{{$contact->email}}</td>
</tr>
    <tr>
        <td>Phone</td>
        <td>{{$contact->phone}}</td>
    </tr>
    <tr>
        <td>Website</td>
        <td>{{$contact->website}}</td>
    </tr>
    <tr>
        <td>Project</td>
        <td>{{$contact->project}}</td>
    </tr>
    <tr>
        <td>Budget</td>
        <td>{{$contact->budget}}</td>
    </tr>
    <tr>
        <td>Services</td>
        <td>{{$contact->services}}</td>
    </tr>
{{--    <tr>--}}
{{--        <td>Schedule date</td>--}}
{{--        <td>{{$contact->schedule_date}}</td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td>Schedule time</td>--}}
{{--        <td>{{$contact->schedule_time}}</td>--}}
{{--    </tr>--}}
    <tr>
        <td>Competitors</td>
        {{$contact->competitors}}</td>
    </tr>
{{--    <tr>--}}
{{--        <td>Timezone</td>--}}
{{--        <td>{{$contact->timezone}}</td>--}}
{{--    </tr>--}}
    <tr>
        <td>Reference</td>
        <td>{{$contact->reference}}</td>
    </tr>

</table>
