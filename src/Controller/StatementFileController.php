<?php

namespace App\Controller;

use App\Entity\StatementFile;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Annotation\Route;

class StatementFileController extends AbstractController
{
    private $entity;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entity = $entityManager;
    }

    /**
     * @Route("/statement/file", name="statement_file")
     */
    public function index()
    {
        $path = "/Users/smaelmouheb/Downloads/statement_file.csv";
        $csvFileFile = new File($path);
        $fileObj = $csvFileFile->openFile();
        foreach ($fileObj as $fileParse){

            $arr[] = $fileObj->fgetcsv();


        }

        for($i =0; $i < count($arr); $i++){

            foreach ($arr as $aa){

                $statementObj = new StatementFile();

                try{

                    $statementObj->setUser(33);
                    $statementObj->setOperationdate(new \DateTime('now'));
                    $statementObj->setOperations($aa[3]);
                    $statementObj->setCommunication($aa[4]);
                    $statementObj->setAccount($aa[5]);
                    $statementObj->setReferencemovement($aa[6]);
                    $statementObj->setAmount($aa[7]);
                    $statementObj->setCreatedAt(new \DateTime('now'));
                    $statementObj->setUpdatedAt(new \DateTime('now'));

                } catch (Exception $e){
                        $e->getMessage();
                    }

                    $this->entity->persist($statementObj);
                }
            }

            $this->entity->flush();


        return $this->render('statement_file/index.html.twig', [
            'controller_name' => 'StatementFileController',
        ]);
    }
}
