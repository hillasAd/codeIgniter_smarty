{extends file="layout.php"}

{block name=main}

    <h5>{$titulo}</h5>
    {if $msg}
    <div class="alert alert-primary" role="alert">
    {$msg}
</div>
{/if}
    <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Valor</th>
              <th scope="col">Opcoes</th>
            </tr>
          </thead>
          <tbody>
                {foreach $produtos as $produto}
                <tr>
        <td>{$produto->id}</td>
        <td>{$produto->nome}</td>
        <td>{$produto->valor}</td>
        <td>
          <a href="/produto/editar/{$produto->id}" class="btn btn-primary">Editar</a>
          <a href="/produto/eliminar/{$produto->id}" class="btn btn-danger">Eliminar</a>
        </td>
        </tr>
                {/foreach}

          </tbody>
    </table>
  </div>


{/block}
