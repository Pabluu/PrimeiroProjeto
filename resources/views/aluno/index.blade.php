<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Teste</title>

    <style>
        p{
            background-image: linear-gradient(to right, gray, white);
            height: 30px;
            text-align: center;
        }

        label{
            margin:auto;
        }

        table{
            border: 1px solid;
        }

    </style>
</head>
<body>  

    <form method="POST" action="/aluno">
        <div>
            <label>Nome: </label>
            <input type="text" name="nome" value="{{$aluno->nome}}" />
        </div><br>

        <div>
            <label>E-mail:</label>
            <input type="email" name="email" value="{{$aluno->email}}"/>
        </div><br>

        <div>
            <label for="">Gênero:</label>
            <select name="genero">
                <option value=""></option>
                <option value="M" 
                    {{$aluno->genero == "M" ? "selected" : ""}}>
                Masculino</option>

                <option value="F"
                {{$aluno->genero == "F" ? "selected" : ""}}>
                Feminino</option>

                <option value="N"
                {{$aluno->genero == "N" ? "selected" : ""}}>                    
                Não declarado</option>
            </select>
        </div><br>


        <div>
            <label>Observações</label>
            <textarea name="obs" height="2">{{$aluno->obs}}</textarea><br>
        
            @csrf
            <input type="hidden" name="id" value="{{$aluno->id}}" />
            <br><br> 

            <button type="submit"> Salvar</button>
            <br><br><br><br> 
        </div>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($alunos as $aluno)
                <tr>
                    <td>{{$aluno->nome}}</td>
                    <td>{{$aluno->email}}</td>

                    <td>
                        <a href="/aluno/editar/{{$aluno->id}}">
                        Editar
                    </td>


                    <td>
                        <a href="/aluno/excluir/{{$aluno->id}}">
                        Excluir
                    </td>
                </tr>
                @endforeach
            </tbody>    

        </table>
    </form>


</body>
</html>