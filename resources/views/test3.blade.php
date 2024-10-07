@foreach ($tabulasi as $data)
    <?php $array = json_decode($data->data); ?>
    <?php $kolom = $array[0]; ?>
    
      @foreach ($kolom as $key => $val)
          "{{$key}}" 
          <br>
      @endforeach
      <hr>

    
    @foreach ($array as $item)
      @foreach ($item as  $val)
          {{$val}}
          <br>
      @endforeach
      <hr>
        

    @endforeach
@endforeach