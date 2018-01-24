db fields
relations

Look into SilverStripe theme - Vanilla (composer require [package][version])

composer show --all package_name
foundation - Zurb

brand sliders (have many)
main content & brand sliders content (home page)
Work with images (has one)
Forms - user forms module

public function getCMSFields() {

        $f = parent::getCMSFields();

        $f->removeByName('Sort');
        $f->removeByName('Logo');
        $f->removeByName('ComparisonTopLevelCategories');
        $f->addFieldToTab('Root.Main', TextField::create('Name'));

        if ($this->exists()) {
            $logo = UploadField::create('Logo');
            $logo->setAllowedFileCategories('image');
            $logo->setFolderName('Manufacturer Logos');
            $f->addFieldToTab('Root.Main', $logo);

            $config = GridFieldConfig_RecordEditor::create(); **security page CMS**
            $grid = GridField::create('ComparisonTopLevelCategories', 'Categories', $this->ComparisonTopLevelCategories(), $config);
            $config->addComponent(new GridFieldOrderableRows());**delete (module add on, as you add fields to a class - adds to CMS)**
            $f->addFieldToTab('Root.Main', $grid);
        }

        return $f;

    }
