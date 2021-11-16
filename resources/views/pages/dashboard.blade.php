<form  id="new_schedule" method="POST"> 
    @csrf
    @method('POST')
    <input type="text"    name="usuario" value="Wendryos" readonly required>
    <input type="text"    name="data_registro"   value="{{ date("d/m/Y") }}"   readonly required>
    <input type="time"    name="primeira_entrada" >
    <input type="time"    name="primeira_saida"   >
    <input type="time"    name="segunda_entrada"  >
    <input type="time"    name="segunda_saida"    >
    <button type="submit"> Registrar ponto </button>
</form>


<script>
    document.querySelector("#new_schedule").addEventListener('submit', function(e) {
                   e.preventDefault();
                   
                      var url     = "{{ route('popoti') }}";
                      var content = new FormData(this);
                      var token   = document.querySelector('input[name=_token]').value;
          
                      fetch(url, {
                              method: 'POST', 
                              body: content,
                              headers: {
                                      'url': url,
                                      "X-CSRF-Token": token
                              },
                              }).then(function(response) {
                                      return response.json();
                              }).then(function(result) {
                              alert(result.primeira_entrada);
                      })
                      
           });

  </script>
