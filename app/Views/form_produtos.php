{extends file="layout.php"}

{block name=main}
<div class="row">
    <h5>{$subtitulo}</h5>
    {if $msg}
    <div class="alert alert-{$msgType}" role="alert">
    {$msg}
            {if $msg}
            <ul>
                {foreach $errors as $error}
                <li>{$error}</li>
                {/foreach}
            </ul>
            {/if}
    </div>
    {/if}
    </div>

    <form method="post">
    <input type="hidden" name="id" value="{$produto->id|default:''}">
    <div class="row">
        <div class="col-4">
            <label>Nome:</label>
            <input type="text" name="nome" value="{$produto->nome|default:''}" class="form-control">
        </div>
        <div class="col-4">
            <label>Valor:</label>
            <input type="text" name="valor" value="{$produto->valor|default:''}" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-4">
           <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
    </form>
{/block}
