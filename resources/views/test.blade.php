<style>
    div{
        margin: 20;
    }

    td{
        padding: 5;
    }
    .w-5{
        width: 50px!important;
        height: 50px!important;
    }
</style>
<div>
    {{ $lists }}
    <hr><br>

    <table border="1" style="border-collapse: collapse;">
        <tr>
            <td>id</td>
            <td>구매자</td>
            <td>상품</td>
            <td>가격</td>
            <td>구매 날짜</td>
        </tr>
        @foreach($lists as $list)
        <tr>
            <td>{{ $list->id }}</td>
            <td>{{ $list->user_name }}</td>
            <td>{{ $list->product_name }}</td>
            <td>{{ $list->product_price }}</td>
            <td>{{ $list->purchase }}</td>
        </tr>
        @endforeach
    </table>
    <br><hr>

    주문 수: {{ $count }} <br>
    제일 비싼거:{{ $max }} <br>
    제일 싼거:{{ $min }} <br>
    평균 가격: {{ $avg }} <br>
    값이 없는거: {{$union}} <br>
    <hr>

    구매자가 aa이거나 10000원 넘는거 <br>
    id <br>
    @foreach($orwheres as $orwhere)
        {{ $orwhere->id }} <br>
    @endforeach
    <hr>

    5000~30000 O <br>
    id <br>
    @foreach($wherebs as $whereb)
        {{ $whereb->id }} <br>
    @endforeach
    <hr>

    5000~30000 X <br>
    id <br>
    @foreach($wherenbs as $wherenb)
        {{ $wherenb->id }} <br>
    @endforeach
    <hr>

    2021에 팔린거 <br>
    id <br>
    @foreach($whereds as $whered)
        {{ $whered -> id }} <br>
    @endforeach
    <hr>
    <br>

    랜덤으로 값 가져오기 <br>
    {{ $users->id }}
    <hr><br>

{{--    {{ $dbug }}--}}

    @foreach($pages as $page)
        {{ $page->id }}
        {{ $page->user_name }} <br>
    @endforeach
    <hr>
    {{ $pages }}

    <hr>
    <br>


</div>
