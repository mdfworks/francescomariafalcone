<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= css('/assets/css/styles.css') ?>
  <title><?= $site->title() ?></title>
</head>
<body class="bg-zinc-950 text-zinc-50 text-sm">
  <header class="p-3 flex flex-col gap-6">
    <ul class="grid grid-cols-2 xl:grid-cols-6 gap-x-3 gap-y-6">
      <li class="xl:col-span-3"><?= $site->title() ?></li>
      <li><?= $site->role() ?></li>
      <li><a class="hover:underline" href="<?= $site->instagram()->url() ?>">Instagram</a></li>
      <li><a class="hover:underline" href="mailto:<?= Str::encode($site->email()) ?>">Email</a></li>
    </ul>
    <p><?= $site->bio()->kt() ?></p>
  </header>
  
  <main>
    <ul class="flex flex-col gap-6">
      <?php 
      $projects = $site->children()->template('project');
      foreach($projects as $project) :
      ?>
      <li class="p-3 flex flex-col gap-1">
        <ul class="grid grid-cols-2 xl:grid-cols-6 gap-x-3 gap-y-6">
          <li class="xl:col-span-3">
            <ul class="relative w-full">
              <?php 
              $gallery = $project->gallery()->toFiles();
              $i = 1;
              foreach($gallery as $image) :
              ?>
              <li id="<?= $project->pre() ?><?= $i ?>" class="absolute top-0 left-0 -z-10">
              <img
                class="w-full"
                alt="<?= $image->alt() ?>"
                src="<?= $image->resize(600)->url() ?>"
                srcset="<?= $image->srcset('landscape') ?>"
                width="<?= $image->resize(1800)->width() ?>"
                height="<?= $image->resize(1800)->height() ?>"
              >
              </li>
              <?php $i++; endforeach; ?>
            </ul>
            <p style="filter:invert(0);mix-blend-mode:difference;"><?= $project->title() ?></p>
          </li>
          <li style="filter:invert(0);mix-blend-mode:difference;"><?= $project->tags() ?></li>
          <li style="filter:invert(0);mix-blend-mode:difference;"><?= $project->year() ?></li>
          <li style="filter:invert(0);mix-blend-mode:difference;"><?= $project->location() ?></li>
        </ul>
        <p style="filter:invert(0);mix-blend-mode:difference;"><?= $project->info() ?></p>
        <ul class="grid grid-cols-2 gap-x-3 gap-y-6">
          <li>
          </li>
          <li>
            <ul>
              <?php 
              $gallery = $project->gallery()->toFiles();
              $i = 1;
              foreach($gallery as $picture) :
              ?>
              <li
              style="filter:invert(0);mix-blend-mode:difference;"
              id="<?= $project->pre() ?><?= $i ?>"><?= $project->pre() ?>0<?= $i ?>.jpeg</li>
              <?php $i++; endforeach; ?>
            </ul>
          </li>
        </ul>
      </li>
      <?php endforeach; ?>
    </ul>
  </main>
</body>
</html>