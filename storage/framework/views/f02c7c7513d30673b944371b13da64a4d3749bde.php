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
            <input type="text" name="nome" value="<?php echo e($aluno->nome); ?>" />
        </div><br>

        <div>
            <label>E-mail:</label>
            <input type="email" name="email" value="<?php echo e($aluno->email); ?>"/>
        </div><br>

        <div>
            <label for="">Gênero:</label>
            <select name="genero">
                <option value=""></option>
                <option value="M" 
                    <?php echo e($aluno->genero == "M" ? "selected" : ""); ?>>
                Masculino</option>

                <option value="F"
                <?php echo e($aluno->genero == "F" ? "selected" : ""); ?>>
                Feminino</option>

                <option value="N"
                <?php echo e($aluno->genero == "N" ? "selected" : ""); ?>>                    
                Não declarado</option>
            </select>
        </div><br>


        <div>
            <label>Observações</label>
            <textarea name="obs" height="2"><?php echo e($aluno->obs); ?></textarea><br>
        
            <?php echo csrf_field(); ?>
            <input type="hidden" name="id" value="<?php echo e($aluno->id); ?>" />
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
                <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($aluno->nome); ?></td>
                    <td><?php echo e($aluno->email); ?></td>

                    <td>
                        <a href="/aluno/editar/<?php echo e($aluno->id); ?>">
                        Editar
                    </td>


                    <td>
                        <a href="/aluno/excluir/<?php echo e($aluno->id); ?>">
                        Excluir
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>    

        </table>
    </form>


</body>
</html><?php /**PATH /home/iftm/Documentos/Pablo/primeiro/resources/views/aluno/index.blade.php ENDPATH**/ ?>