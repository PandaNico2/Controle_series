<x-layout titulo="Séries">

<a href="/series/criar">Criar Nova serie</a>
    <ul>
        <?php foreach ($series as $serie) : ?>
            <li><?php echo $serie; ?></li>
        <?php endforeach; ?>
    </ul>
</x-layout>