<div class="btn-group mt-3">
    <button class="btn btn-outline-primary">Cadastrar Novo Cliente {{last}}</button>
<!--    <button>testD</button>-->
</div>

<div class="mt-5">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Nome Cliente</th>
            <th scope="col">Documento</th>
            <th scope="col">Cidade</th>
        </tr>
        </thead>
        <tbody>
        {% for t in teste %}
        <tr>
            <th scope="row">{{t.id}}</th>
            <td>{{t.nome}}</td>
            <td>{{t.idade}}</td>
        </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
