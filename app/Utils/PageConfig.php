<?php

namespace App\Utils;

use App\Implementations\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\File;

class PageConfig
{
    private string $name;
    private string $viewRoot;
    private string $prefixRoute;
    private string $baseRoute;

    private array $routes = [];

    private string $indexPageTitle;
    private string $indexPageAddButtonTxt;
    private string $indexPageAddButtonIcon;
    private string $indexPageBulkDeleteButtonTxt;
    private string $indexPageBulkDeleteButtonIcon;
    private string $indexPageFilterButtonTxt;

    private string $createPageTitle;
    private string $createPageSuccessMessage;
    private string $createPageErrorMessage;
    private string $createPageSubmitText;

    private string $showPageTitle;
    private string $showPageEditButtonTxt;
    private string $showPageEditButtonIcon;

    private string $editPageTitle;
    private string $editPageAddButtonTxt;
    private string $editPageAddButtonIcon;
    private string $editPageSuccessMessage;
    private string $editPageErrorMessage;
    private string $editPageSubmitText;

    private string $deleteModalMessage;
    private string $deleteSuccessMessage;
    private string $deleteErrorMessage;

    private string $bulkDeleteModalMessage;
    private string $bulkDeleteSuccessMessage;
    private string $bulkDeleteErrorMessage;

    /**
     * Constructor to initialize page configuration.
     *
     * @param  string  $name
     * @param  string  $viewRoot
     * @param  string  $prefixRoute
     * @param  string  $baseRoute
     * @param  array  $routes  Additional routes (optional).
     * @param  bool  $withDefaultRoutes
     */
    public function __construct( string $name, string $viewRoot, string $prefixRoute, string $baseRoute,  array $routes = [],bool $withDefaultRoutes = true )
    {
        $this->name = $name;
        $this->viewRoot = $viewRoot;
        $this->prefixRoute = str($prefixRoute)->lower()->toString();
        $this->baseRoute = str($baseRoute)->lower()->toString();

        $prefix = $this->prefixRoute ? "{$this->prefixRoute}." : '';
        $defaultRoutes = [
            'index' => "{$prefix}{$this->baseRoute}.index",
            'store' => "{$prefix}{$this->baseRoute}.store",
            'update' => "{$prefix}{$this->baseRoute}.update",
            'destroy' => "{$prefix}{$this->baseRoute}.destroy",
        ];

        $this->routes = $withDefaultRoutes
            ? array_merge($defaultRoutes, $routes)
            : $routes;
    }

    public function setIndexPage(string $title, string $addButtonTxt, string $addButtonIcon = "ic:round-plus", string $bulkDeleteButtontxt = "Delete all", string $bulkDeleteButtonIcon = "tabler:trash", string $filterButtonTxt = "Filter")
    {
        $this->indexPageTitle = $title;
        $this->indexPageAddButtonTxt = $addButtonTxt;
        $this->indexPageAddButtonIcon = $addButtonIcon;
        $this->indexPageBulkDeleteButtonTxt = $bulkDeleteButtontxt;
        $this->indexPageBulkDeleteButtonIcon = $bulkDeleteButtonIcon;
        $this->indexPageFilterButtonTxt = $filterButtonTxt;

    }

    public function setCreatePage(string $title, string $successMessage, string $errorMessage, string $submitText = "Save")
    {
        $this->createPageTitle = $title;
        $this->createPageSuccessMessage = $successMessage;
        $this->createPageErrorMessage = $errorMessage;
        $this->createPageSubmitText = $submitText;

    }

    public function setShowPage(string $title, string $editButtonTxt, string $editButtonIcon = "ic:round-edit")
    {
        $this->showPageTitle = $title;
        $this->showPageEditButtonTxt = $editButtonTxt;
        $this->showPageEditButtonIcon = $editButtonIcon;
    }

    public function setEditPage(string $title, string $addButtonTxt, string $addButtonIcon = "ic:round-plus", string $successMessage = "", string $errorMessage = "", string $submitText = "Save")
    {
        $this->editPageTitle = $title;
        $this->editPageAddButtonTxt = $addButtonTxt;
        $this->editPageAddButtonIcon = $addButtonIcon;
        $this->editPageSuccessMessage = $successMessage;
        $this->editPageErrorMessage = $errorMessage;
        $this->editPageSubmitText = $submitText;

    }

    public function setDelete(string $modalMessage, string $successMessage, string $errorMessage)
    {
        $this->deleteModalMessage = $modalMessage;
        $this->deleteSuccessMessage = $successMessage;
        $this->deleteErrorMessage = $errorMessage;

    }

    public function setDeleteBulk(string $modalMessage, string $successMessage, string $errorMessage)
    {
        $this->bulkDeleteModalMessage = $modalMessage;
        $this->bulkDeleteSuccessMessage = $successMessage;
        $this->bulkDeleteErrorMessage = $errorMessage;

    }

    public function getRoutes()
    {
        return arrayToObject($this->routes);
    }

    public function generatePageInfo(array $additionalPages = []): object
    {
        $nameSingular = str($this->name)->singular()->headline()->ucfirst()->toString();
        $nameSingularLower = str($this->name)->singular()->headline()->lower()->toString();
        $namePlural = str($this->name)->plural()->headline()->ucfirst()->toString();
        $namePluralLower = str($this->name)->plural()->headline()->lower()->toString();
        $nameFeature = str($this->name)->singular()->headline()->ucfirst()->toString() . " Management";

        return arrayToObject(array_merge([
            "name" => [
                "singular" => $this->tl($nameSingular),
                "singularLcf" => $this->tl($nameSingularLower),
                "plural" => $this->tl($namePlural),
                "pluralLcf" => $this->tl($namePluralLower),
                "feature" => $this->tl($nameFeature),
            ],
            "view_root" => $this->viewRoot,
            "routes" => $this->routes,
            "index" => [
                "title" => $this->tl($this->indexPageTitle ?? $nameFeature),
                "create" => [
                    "text" => $this->tl($this->indexPageAddButtonTxt ?? "Add New " . $nameSingular),
                    "icon" => $this->indexPageAddButtonIcon ?? "ic:round-plus",
                ],
                "bulk" => [
                    "text" => $this->tl($this->indexPageBulkDeleteButtonTxt ?? "Delete selected " . $namePluralLower),
                    "icon" => $this->indexPageBulkDeleteButtonIcon ?? "tabler:trash",
                ],
                "filter" => [
                    "text" => $this->tl($this->indexPageFilterButtonTxt ?? "Filter")
                ],
            ],
            "create" => [
                "title" => $this->tl($this->createPageTitle ?? "New " . $nameSingular),
                "message" => [
                    "success" => $this->tl($this->createPageSuccessMessage ?? $nameSingular . " created successfully"),
                    "error" => $this->tl($this->createPageErrorMessage ?? "Failed to create the $nameSingularLower. Please try again.")
                ],
                "submit" => [
                    "text" => $this->tl($this->createPageSubmitText ?? "Save")
                ]
            ],
            "show" => [
                "title" => $this->tl($this->showPageTitle ?? $nameSingular),
                "edit" => [
                    "text" => $this->tl($this->showPageEditButtonTxt ?? "Edit " . $nameSingular),
                    "icon" => $this->showPageEditButtonIcon ?? "ic:round-edit",
                ],
            ],
            "edit" => [
                "title" => $this->tl($this->editPageTitle ?? "Edit " . $nameSingular),
                "create" => [
                    "text" => $this->tl($this->editPageAddButtonTxt ?? "Add New " . $nameSingular),
                    "icon" => $this->editPageAddButtonIcon ?? "ic:round-plus",
                ],
                "submit" => [
                    "text" => $this->tl($this->editPageSubmitText ?? "Save")
                ],
                "message" => [
                    "success" => $this->tl($this->editPageSuccessMessage ?? $nameSingular . " updated successfully!"),
                    "error" => $this->tl($this->editPageErrorMessage ?? "Failed to update the $nameSingularLower. Please try again.")
                ],
            ],
            "delete" => [
                "message" => [
                    "success" => $this->tl($this->deleteSuccessMessage ?? "$nameSingular deleted successfully!"),
                    "error" => $this->tl($this->deleteErrorMessage ?? "Failed to delete the $nameSingularLower. Please try again."),
                    "message" => $this->tl($this->deleteModalMessage ?? "Are you sure you want to delete this $nameSingularLower?")
                ],
            ],
            "deleteBulk" => [
                "message" => [
                    "success" => $this->tl($this->bulkDeleteSuccessMessage ?? "$namePlural deleted successfully!"),
                    "error" => $this->tl($this->bulkDeleteErrorMessage ?? "Failed to delete the $namePluralLower. Please try again."),
                    "message" => $this->tl($this->bulkDeleteModalMessage ?? "Are you sure you want to delete these $namePluralLower?")
                ],
            ],
        ], $additionalPages));
    }

    protected function tl($text)
    {
        $to = app()->getLocale();
        $from = "en";
        if($to == $from) return $text;


        $cacheFile = resource_path("lang/{$to}.json");
        $translations = File::exists($cacheFile)
            ? json_decode(File::get($cacheFile), true)
            : [];

        // Return cached if exists
        if (isset($translations[$text])) {
            return $translations[$text];
        }


        // Translate and cache
        try {
            $translated = GoogleTranslate::translate($from, $to, $text);
            $translations[$text] = $translated;

            $dir = dirname($cacheFile);
            if (!File::exists($dir)) {
                File::makeDirectory($dir, 0755, true);
            }

            File::put($cacheFile, json_encode($translations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
            return $translated;
        } catch (\Throwable $e) {
            return $text; // fallback if translation fails
        }
    }
}
