<?php

class FileStorageBackend extends StorageBackend
{
    //Stub class
    public function FileStorageBackend()
    {
    }

    public function getAbsoluteFilePath($resourceId)
    {
        //TODO
        return $resourceId;
    }

    public function getDownloadURLs($resourceId, $contentDispositionFilename)
    {
        return "";
    }

    public function deletePhysicalFile($resourceId)
    {
        //TODO
    }

    public function deleteAllCloudFileObjects()
    {
        return "";
    }

    public function getFilePrefix()
    {
        return "";
    }
}