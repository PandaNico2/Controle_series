<x-layout titulo="Séries">

<a href="/series/criar" class="btn btn-dark mb-2">Criar Nova serie</a>
    <ul class="list-group">
        <?php foreach ($series as $serie) : ?>
            <li class="list-group-item"><?php echo $serie->nome; ?></li>
        <?php endforeach; ?>
    </ul>
</x-layout>