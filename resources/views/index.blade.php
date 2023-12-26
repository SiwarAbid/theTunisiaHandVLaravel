<table>
    <tr>
        <th> ID </th>
        <th> Nom </th>
        <th> Auteur </th>
        <th> Prix </th>
        <th> Modifier </th>
        <th> Supprimer </th>
        

    </tr>
    <?php
    //require_once __DIR__ .'/../Model/livre.php';
        foreach($livres as $p){?>
    <tr>
        <td> <?=$p->id ?> </td>
        <td> <?=$p->title ?> </td>
        <td> <?=$p->auteur ?> </td>

        <td> <?=$p->prix ?> </td>
        <td><a href="{{ route ('livre.edit',$p->id) }}" id="button" >Modifier</a></td>
        <td>
            <form method="post" action="{{ route('livre.destroy',$p->id)}}"> 
                    @csrf
                    @method("DELETE")
                <input type="submit" value="Supprimer" />
            </form>
        </td>
        </tr>  
    <?php }?>