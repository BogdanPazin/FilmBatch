<h1 style="text-align: center">
    List of people
</h1>

<table style="font-family: Arial, Helvetica, sans-serif; border-collapse: collapse; width: 100%;">
    <tr>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #04AA6D; color: white;">Name</th>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #04AA6D; color: white;">Email</th>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #04AA6D; color: white;">Role</th>
        <th style="border: 1px solid #ddd; padding: 8px; padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #04AA6D; color: white;">ID</th>
    </tr>
    @foreach($data as $person)
        <tr>
            <td style="border: 1px solid #ddd; padding: 8px">
                {{$person->name}}
            </td>
            <td style="border: 1px solid #ddd; padding: 8px">
                {{$person->email}}
            </td>
            <td style="border: 1px solid #ddd; padding: 8px">
                {{$person->role}}
            </td>
            <td style="border: 1px solid #ddd; padding: 8px">
                {{$person->id}}
            </td>
        </tr>
    @endforeach
</table>