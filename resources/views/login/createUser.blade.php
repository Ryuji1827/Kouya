<table>
    @csrf
      <tr>
          <th>名前</th>
          <td>{{$param['name']}}</td>
      </tr>
      <tr>
          <th>メールアドレス</th>
          <td>{{$param['email']}}</td>
      </tr>
      <tr>
          <th>電話番号</th>
          <td>{{$param['tel']}}</td>
      </tr>
      <tr>
          <th>パスワード</th>
          <td>{{$param['pass1']}}</td>
      </tr>
    </table>