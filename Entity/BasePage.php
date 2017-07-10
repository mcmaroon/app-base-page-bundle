<?php

namespace App\BasePageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use App\AppBundle\Model\BaseActiveEntityMeta;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * BasePage
 *
 * @ORM\Table(name="base_page")
 * @ORM\Entity(repositoryClass="App\BasePageBundle\Repository\BasePageRepository")
 * @ORM\HasLifecycleCallbacks
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 */
class BasePage extends BaseActiveEntityMeta {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;
    
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65530, nullable=true)
     */
    protected $description;

    use \Gedmo\SoftDeleteable\Traits\SoftDeleteableEntity;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }
    
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    public function getSlug() {
        return $this->slug;
    }
    
    /**
     * Set description
     *
     * @param string $description
     *
     * @return BasePage
     */
    public function setDescription($description) {
        $this->description = trim($description);

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

}
