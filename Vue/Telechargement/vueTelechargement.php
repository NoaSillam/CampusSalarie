<?php
// function zipDir($source, $destination) {
//     if (!extension_loaded('zip') || !file_exists($source)) {
//         return false;
//     }

//     $zip = new ZipArchive();
//     if (!$zip->open($destination, ZIPARCHIVE::CREATE)) {
//         return false;
//     }

//     $source = str_replace('\\', '/', realpath($source));

//     if (is_dir($source) === true) {
//         $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($source), RecursiveIteratorIterator::SELF_FIRST);

//         foreach ($files as $file) {
//             $file = str_replace('\\', '/', $file);

//             // Ignore les dossiers spéciaux "." et ".."
//             if (in_array(substr($file, strrpos($file, '/') + 1), array('.', '..'))) {
//                 continue;
//             }

//             $file = realpath($file);

//             if (is_dir($file) === true) {
//                 $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
//             } elseif (is_file($file) === true) {
//                 $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
//             }
//         }
//     } elseif (is_file($source) === true) {
//         $zip->addFromString(basename($source), file_get_contents($source));
//     }

//     return $zip->close();
// }

// // Chemin du dossier à compresser
// $source = 'export';

// // Nom du fichier d'archive ZIP
// $destination = 'exportInscrit.zip';

// // Compression du dossier
// if (zipDir($source, $destination)) {
//     // Envoi de l'archive ZIP au navigateur pour téléchargement
//     header('Content-Type: application/zip');
//     header('Content-Disposition: attachment; filename="' . $destination . '"');
//     header('Content-Length: ' . filesize($destination));

//     readfile($destination);

//     // Suppression du fichier d'archive une fois téléchargé
//     unlink($destination);
// } else {
//     echo 'La compression du dossier a échoué.';
// }

// // Chemin du dossier à zipper
// $folderPath = 'export';

// // Nom du fichier ZIP de sortie
// $zipFileName = 'dossier_compressé_export_inscrit.zip';

// $zip = new ZipArchive();

// // Ouverture du fichier ZIP en mode création
// if ($zip->open($zipFileName, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
//     // Itération sur les fichiers et les dossiers dans le dossier source
//     $files = new RecursiveIteratorIterator(
//         new RecursiveDirectoryIterator($folderPath),
//         RecursiveIteratorIterator::LEAVES_ONLY
//     );

//     foreach ($files as $name => $file) {
//         // Ignorer les dossiers
//         if (!$file->isDir()) {
//             // Obtenir le chemin absolu et relatif du fichier
//             $filePath = $file->getRealPath();
//             $relativePath = substr($filePath, strlen($folderPath) + 1);

//             // Ajouter le fichier au fichier ZIP avec son chemin relatif
//             $zip->addFile($filePath, $relativePath);
//         }
//     }

//     // Fermeture du fichier ZIP
//     $zip->close();

//     // Déplacer le fichier ZIP vers un répertoire accessible
//     $destinationPath = $zipFileName;
//     if (rename($zipFileName, $destinationPath)) {
//         // Générer le lien de téléchargement
//         $downloadLink = 'http://localhost:8888/testCampusMvcCCopieCopieCopieDossierBddMissionApiCopieConnectionStatutDesignCCopie/' . $zipFileName;

//         // Afficher le lien de téléchargement
//         echo 'Le fichier ZIP est prêt à être téléchargé : <a href="' . $downloadLink . '">Télécharger</a>';
//     } else {
//         echo 'Échec du déplacement du fichier ZIP vers un répertoire accessible.';
//     }
// } else {
//     echo 'Échec de la compression du dossier.';
// }
// Chemin du dossier à zipper
// $folderPath = 'export';

// // Vérifier si le dossier existe
// if (is_dir($folderPath)) {
//     // Définir les en-têtes HTTP pour le téléchargement
//     header('Content-Type: application/zip');
//     header('Content-Disposition: attachment; filename="dossier_export.zip"');
//     header('Pragma: no-cache');
//     header('Expires: 0');

//     // Ouvrir un flux de sortie en mode binaire
//     $fileStream = fopen('php://output', 'wb');

//     // Créer une archive ZIP en temps réel
//     $zip = new ZipArchive();
//     if ($zip->open($fileStream, ZipArchive::CREATE) === true) {
//         // Itération sur les fichiers et les dossiers dans le dossier source
//         $files = new RecursiveIteratorIterator(
//             new RecursiveDirectoryIterator($folderPath),
//             RecursiveIteratorIterator::LEAVES_ONLY
//         );

//         foreach ($files as $name => $file) {
//             // Ignorer les dossiers
//             if (!$file->isDir()) {
//                 // Obtenir le chemin absolu et relatif du fichier
//                 $filePath = $file->getRealPath();
//                 $relativePath = substr($filePath, strlen($folderPath) + 1);

//                 // Ajouter le fichier à l'archive ZIP avec son chemin relatif
//                 $zip->addFile($filePath, $relativePath);
//             }
//         }

//         // Fermer l'archive ZIP
//         $zip->close();
//     }

//     // Fermer le flux de sortie
//     fclose($fileStream);
// } else {
//     echo 'Le dossier spécifié n\'existe pas.';
// }
// infos du fichier 
// $fichier = "export.zip";

// if (file_exists($fichier)) {
//     // téléchargement du fichier 
//     header('Content-disposition: attachment; filename=' . basename($fichier));
//     header('Content-Type: application/zip');
//     header('Content-Transfer-Encoding: binary');
//     header('Content-Length: ' . filesize($fichier));
//     header('Pragma: no-cache');
//     header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
//     header('Expires: 0');
    
//     readfile($fichier);
// } else {
//     echo "Le fichier spécifié n'existe pas.";
// }

// $sourceDir = 'export'; // Chemin vers le dossier à zipper
// $zipFile = 'export_test.zip'; // Chemin de destination du fichier ZIP

// if (extension_loaded('zip')) {
//     $zip = new ZipArchive();

//     if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
//         $files = new RecursiveIteratorIterator(
//             new RecursiveDirectoryIterator($sourceDir),
//             RecursiveIteratorIterator::LEAVES_ONLY
//         );

//         foreach ($files as $file) {
//             if (!$file->isDir()) {
//                 $filePath = $file->getRealPath();
//                 $relativePath = substr($filePath, strlen($sourceDir) + 1);

//                 $zip->addFile($filePath, $relativePath);
//             }
//         }

//         $zip->close();

//         if (file_exists($zipFile)) {
//             // Proposer le téléchargement du fichier ZIP
//             header('Content-Type: application/zip');
//             header('Content-Disposition: attachment; filename="' . basename($zipFile) . '"');
//             header('Content-Length: ' . filesize($zipFile));

//             readfile($zipFile);
//         } else {
//             echo 'Le fichier ZIP n\'existe pas.';
//         }
//     } else {
//         echo 'Impossible de créer le fichier ZIP.';
//     }
// } else {
//     echo 'L\'extension Zip n\'est pas disponible sur ce serveur.';
// }

$cheminDossier = 'export';

// Nom du fichier ZIP à créer
$nomFichierZip = 'archive.zip';

// Création de l'archive ZIP
$zip = new ZipArchive();
if ($zip->open($nomFichierZip, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    // Récupérer tous les fichiers du dossier
    $fichiers = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($cheminDossier),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    foreach ($fichiers as $fichier) {
        // Ajouter le fichier à l'archive en conservant la structure des dossiers
        if (!$fichier->isDir()) {
            $cheminFichier = $fichier->getRealPath();
            $cheminRelatif = substr($cheminFichier, strlen($cheminDossier) + 1);
            $zip->addFile($cheminFichier, $cheminRelatif);
        }
    }

    $zip->close();

    // Lancer le téléchargement du fichier ZIP
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . $nomFichierZip . '"');
    header('Content-Length: ' . filesize($nomFichierZip));
    readfile($nomFichierZip);

    // Supprimer le fichier ZIP après le téléchargement
    unlink($nomFichierZip);
} else {
    echo 'Impossible de créer l\'archive ZIP.';
}
?>