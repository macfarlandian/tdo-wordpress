<?php

// initialize with recursive data structure for chapters/sections

$chapters = array(
  array( // titles
    "Foundations For Organizing Systems",
      "Activities In Organizing Systems",
    "Resources In Organizing Systems",
    "Resource Description And Metadata",
    "Describing Relationships And Structures",
    "Categorization: Describing Resource Classes And Types",
    "Classification: Assigning Resources To Categories",
    "The Forms Of Resource Descriptions",
    "Interactions With Resources",
    "The Organizing System Roadmap"
  ),
  array()
);

// x.x chapters
$chapters[1] = array(
  array( // 1.x
    array( // titles
      'The Discipline Of Organizing',
      'The “Organizing System” Concept',
      'Design Decisions In Organizing Systems',
      'Organizing This Book'
    ),
    array( // 1.x.x chapters
      NULL, // 1.1.x
      array( // 1.2.x
        array( // titles
          'The Concept Of “Resource”',
          'The Concept Of “Collection”',
          'The Concept Of “Intentional Arrangement”',
          'The Concept Of “Interactions”'
        ),
        array(
          NULL,
          NULL,
          array( // 1.2.3.x
            array(
              'The Concept Of “Organizing Principle”',
              'The Concept Of “Agent”'
            ),
            NULL
          ),
          NULL
        )
      ),
      array( // 1.3.x
        array( // titles
          'Organizing Systems In A “Design Space”',
          'What Is Being Organized?',
          'Why Is It Being Organized?',
          'How Much Is It Being Organized?',
          'When Is It Being Organized?',
          'How (Or By Whom) Is It Organized?'
        ),
        array(
          array( // 1.3.1.x
            array(
              'Conventional Ways To Classify Organizing Systems',
              'A Multifaceted Or Multidimensional View'
            ),
            NULL
          ),
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
        )
      ),
      NULL
    )
  ),
  array( // 2.x
    array( // titles
      'Introduction',
      'Selecting Resources',
      'Organizing Resources',
      'Designing Resource-Based Interactions',
      'Maintaining Resources',
      'Key Points In Chapter Two'
    ),
    array(
      NULL,
      array( // 2.2.x
        array(
          'Selecting {And, Or, Vs.} Organizing',
          'Selection Principles',
          'Selection Of Digital And Web-Based Resources'
        ),
        NULL
      ),
      array( // 2.3.x
        array(
          'Organizing Physical Resources',
          'Organizing Digital Resources',
          'Organizing With Multiple Resource Properties'
        ),
        array(
          array( // 2.3.1.x
            array(
              'Organizing With Properties Of Physical Resources',
              'Organizing With Descriptions Of Physical Resources'
            ),
            NULL
          ),
          array( // 2.3.2.x
            array(
              'Organizing Web-Based Resources',
              '“Information Architecture” And Organizing Systems'
            ),
            NULL
          ),
          NULL

        )
      ),
      array( // 2.4.x
        array(
          'Affordance And Capability',
          'Interaction And Value Creation',
          'Access Policies'
        ),
        array(
          NULL,
          array( // 2.4.2.x
            array(
              'Value Creation With Physical Resources',
              'Value Creation With Digital Resources'
            ),
            NULL
          ),
          NULL
        )
      ),
      array( // 2.5.x
        array(
          'Motivations For Maintaining Resources',
          'Preservation',
          'Curation',
          'Governance'
        ),
        array(
          NULL,
          array( // 2.5.2.x
            array(
              'Digitization And Preserving Resources',
              'Preserving The Web',
              'Preserving Resource Instances',
              'Preserving Resource Types',
              'Preserving Resource Collections'
            ),
            NULL
          ),
          array( // 2.5.3.x
            array(
              'Institutional Curation',
              'Individual Curation',
              'Social And Web Curation',
              'Computational Curation'
            ),
            NULL
          ),
          array( // 2.5.4.x
            array(
              'Governance In Business Organizing Systems',
              'Governance In Scientific Organizing Systems'
            ),
            NULL
          )
        )
      ),
      NULL
    )
  ),
  array( // 3.x
    array( // titles
      'Introduction',
      'Four Distinctions About Resources',
      'Resource Identity',
      'Naming Resources',
      'Resources Over Time',
      'Key Points In Chapter Three'
    ),
    array(
      array( // 3.1.x
        array(
          'What Is A Resource?',
          'Identity, Identifiers, And Names'
        ),
        array(
          array( // 3.1.1.x
            array(
              'Resources With Parts',
              'Bibliographic Resources, Information Components, And “Smart Things” As Resources'
            ),
            NULL
          ),
          NULL
        )
      ),
      array( // 3.2.x
        array(
          'Resource Domain',
          'Resource Format',
          'Resource Agency',
          'Resource Focus',
          'Resource Format X Focus'
        ),
        array(
          NULL,
          NULL,
          array( // 3.2.3.x
            array(
               'Passive Or Operand Resources',
               'Active Or Operant Resources'
            ),
            NULL
          ),
          NULL,
          array( //3.2.5.x
            array(
              'Physical Description Of A Primary Physical Resource',
              'Digital Description Of A Primary Physical Resource',
              'Digital Description Of A Primary Digital Resource',
              'Physical Description Of A Primary Digital Resource'
            ),
            NULL
          )
        )
      ),
      array( // 3.3.x
        array(
          'Identity And Physical Resources',
          'Identity And Bibliographic Resources',
          'Identity And Information Components',
          'Identity And Active Resources'
        ),
        NULL
      ),
      array( // 3.4.x
        array(
          "What's In A Name?",
          "The Problems Of Naming",
          "Choosing Good Names And Identifiers"
        ),
        array(
          NULL,
          array( // 3.4.2.x
            array(
              'The Vocabulary Problem',
              'Homonymy, Polysemy, And False Cognates',
              'Names With Undesirable Associations',
              'Names That Assume Impermanent Attributes',
              'The Semantic Gap'
            ),
            NULL
          ),
          array( // 3.4.3.x
            array(
              'Make Names Informative',
              'Use Controlled Vocabularies',
              'Allow Aliasing',
              'Make Identifiers Unique Or Qualified',
              'Distinguish Identifying And Resolving'
            ),
            NULL
          )
        )
      ),
      array( // 3.5.x
        array(
          'Persistence',
          'Effectivity',
          'Authenticity',
          'Provenance'
        ),
        array(
          array( // 3.5.1.X
            array(
              'Persistent Identifiers',
              'Persistent Resources'
            ),
            NULL
          ),
          NULL,
          NULL,
          NULL
        )
      ),
      NULL
    )
  ),
  array( // 4.x
    array( // titles
        'Introduction',
      'An Overview Of Resource Description',
      'The Process Of Describing Resources',
      'Describing Non-Text Resources',
      'Key Points In Chapter Four'
    ),
    array(
      NULL,
      array( // 4.2.x
        array(
          'Naming {And, Or, Vs.} Describing',
          '“Description” As An Inclusive Term',
          'Frameworks For Resource Description'
        ),
        array(
          NULL,
          array( //4.2.2.x
            array(
              'Bibliographic Descriptions',
              'Metadata',
              'Tagging Of Web-Based Resources',
              'Resource Description Framework (RDF)'
            ),
            NULL
          ),
          NULL
        )
      ),
      array( // 4.3.x
        array(
          'Determining The Scope And Focus',
          'Determining The Purposes',
          'Identifying Properties',
          'Designing The Description Vocabulary',
          'Designing The Description Form',
          'Creating Resource Descriptions',
          'Evaluating Resource Descriptions'
        ),
        array(
          array( // 4.3.1.x
            array(
              'Describing Instances Or Describing Collections',
              'Abstraction In Resource Description',
              'Scope, Scale, And Resource Description'
            ),
            NULL
          ),
          array( // 4.3.2.x
            array(
              'Resource Description To Support Selection',
              'Resource Description To Support Organizing',
              'Resource Description To Support Interactions',
              'Resource Description To Support Maintenance'
            ),
            NULL
          ),
          array( //4.3.3.x
            array(
              'Intrinsic Static Properties',
              'Extrinsic Static Properties',
              'Intrinsic Dynamic Properties',
              'Extrinsic Dynamic Properties'
            ),
            NULL
          ),
          array( // 4.3.4.x
            array(
              'Principles Of Good Description',
              'Who Uses The Descriptions?',
              'Controlled Vocabularies And Content Rules',
              'Vocabulary Control As Dimensionality Reduction'
            ),
            NULL
          ),
          NULL,
          array( // 4.3.6.x
            array(
              'Resource Description By Professionals',
              'Resource Description By Authors Or Creators',
              'Resource Description By Users',
              'Computational And Automated Resource Description'
            ),
            NULL
          ),
          array( // 4.3.7.x
            array(
              'Evaluating The Creation Of Resource Descriptions',
              'Evaluating The Use Of Resource Descriptions',
              'The Importance Of Iterative Evaluation'
            ),
            NULL
          ),
        )
      ),
      array( // 4.4.x
        array(
          'Describing Museum And Artistic Resources',
          'Describing Images',
          'Describing Music',
          'Describing Video',
          'Describing Resource Context'
        ),
        NULL
      ),
      NULL
    )
  ),
  array( // 5.x
    array( // titles
      'Introduction',
      'Describing Relationships: An Overview',
      'The Semantic Perspective',
      'The Lexical Perspective',
      'The Structural Perspective',
      'The Architectural Perspective',
      'The Implementation Perspective',
      'Relationships In Organizing Systems',
      'Key Points In Chapter Five'
    ),
    array(
      NULL,
      NULL,
      array( // 5.3.x
        array(
          'Types Of Semantic Relationships',
          'Properties Of Semantic Relationships',
          'Ontologies'
        ),
        array( // 5.3.1.x
          array(
            array(
              'Inclusion',
              'Attribution',
              'Possession'
            ),
            NULL
          ),
          array( // 5.3.2.x
            array(
              'Symmetry',
              'Transitivity',
              'Equivalence',
              'Inverse'
            ),
            NULL
          ),
          NULL
        )
      ),
      array( // 5.4.x
        array(
          'Relationships Among Word Meanings',
          'Thesauri',
          'Relationships Among Word Forms'
        ),
        array(
          array( // 5.4.1.x
            array(
              'Hyponymy And Hyperonymy',
              'Metonymy',
              'Synonymy',
              'Polysemy',
              'Antonymy'
            ),
            NULL
          ),
          NULL,
          array(
            array(
              'Derivational Morphology',
              'Inflectional Morphology'
            ),
            NULL
          )
        )
      ),
      array( // 5.5.x
        array(
          'Intentional, Implicit, And Explicit Structure',
          'Structural Relationships Within A Resource',
          'Structural Relationships Between Resources'
        ),
        array(
          NULL,
          NULL,
          array( // 5.5.3.x
            array(
              'Hypertext Links',
              'Analyzing Link Structures',
              'Bibliometrics, Shepardizing, And Social Network Analysis'
            ),
            NULL
          )
        )
      ),
      array( // 5.6.x
        array(
          'Degree',
          'Cardinality',
          'Directionality'
        ),
        NULL
      ),
      array( // 5.7.x
        array(
          'Choice Of Implementation',
          'Syntax And Grammar',
          'Requirements For Implementation Syntax'
        ),
        NULL

      ),
      array( // 5.8.x
        array(
          'The Semantic Web And Linked Data',
          'Bibliographic Organizing Systems',
          'Integration And Interoperability'
        ),
        array(
          NULL,
          array( // 5.8.2.x
            array(
              "Tillett's Taxonomy And FRBR",
              'Resource Description And Access (RDA)',
              'RDA And The Semantic Web'
            ),
              NULL
          ),
          NULL
        )
      ),
      NULL
    )
  ),
  array( // 6.x
    array( // titles
      'Introduction',
      'The What And Why Of Categories',
      'Principles For Creating Categories',
      'Category Design Issues And Implications',
      'Implementing Categories',
      'Key Points In Chapter Six'
    ),
    array(
      NULL,
      array( // 6.2.x
        array(
          'Cultural Categories',
          'Individual Categories',
          'Institutional Categories',
          'A “Categorization Continuum”'
        ),
        NULL
      ),
      array( // 6.3.x
        array(
          'Enumeration',
          'Single Properties',
          'Multiple Properties',
          'The Limits Of Property-Based Categorization',
          'Family Resemblance',
          'Similarity',
          'Theory-Based Categories',
          'Goal-Derived Categories'
        ),
        array(
          NULL,
          NULL,
          array( // 6.3.3.x
            array(
              'Multi-Level Or Hierarchical Categories',
              'Different Properties For Subsets Of Resources',
              'Necessary And Sufficient Properties'
            ),
            NULL
          ),
          NULL,
          NULL,
          NULL,
          NULL,
          NULL
        )
      ),
      array( // 6.4.x
        array(
            'Category Abstraction And Granularity',
          'Basic Or Natural Categories',
          'The Recall / Precision Tradeoff',
          'Category Audience And Purpose'
        ),
        NULL
      ),
      array( // 6.5.x
        array(
            'Implementing Classical Categories',
          'Implementing Categories That Do Not Conform To The Classical Theory'
        ),
        NULL
      ),
      NULL
    )
  ),
  array( // 7.x
    array( // titles
      'Introduction',
      'Understanding Classification',
      'Bibliographic Classification',
      'Faceted Classification',
      'Classification By Activity Structure',
      'Computational Classification',
      'Key Points In Chapter Seven'
    ),
    array(
      array( // 7.1.x
        array(
        'Classification Vs. Categorization',
        'Classification Vs. Tagging',
        'Classification Vs. Physical Arrangement',
        'Classification Schemes',
        'Classification And Standardization'
        ),
        array(
          NULL,
          NULL,
          NULL,
          NULL,
          array( // 7.1.5.x
            array(
              'Institutional Taxonomies',
              'Institutional Semantics',
              'Specifications Vs. Standards',
              'Mandated Classifications'
            ),
            NULL
          )
        )
      ),
      array( // 7.2.x
        array(
          'Classification Is Purposeful',
          'Classification Is Principled',
          'Classification Is Biased'
        ),
        array(
          array( // 7.2.1.x
            array(
            'Classifications Are Reference Models',
            'Classifications Support Interactions'
            ),
            NULL
          ),
          array(
            array(
               'Principles Embodied In The Classification Scheme',
               'Principles For Assigning Resources To Categories',
               'Principles For Maintaining The Classification Over Time'
            ),
            NULL
          ),
          NULL
        )
      ),
      array( // 7.3.X
        array(
          'The Dewey Decimal Classification',
          'The Library Of Congress Classification',
          'The BISAC Classification'
        ),
        NULL
      ),
      array( // 7.4.x
        array(
          'Foundations For Faceted Classification',
          'Faceted Classification In Description',
          'A Classification For Facets',
          'Designing A Faceted Classification System'
        ),
        array(
          NULL,
          NULL,
          NULL,
          array( // 7.4.4.x
            array(
              'Design Process For Faceted Classification',
              'Design Principles And Pragmatics'
            ),
            NULL
          )
        )
      ),
      NULL,
      NULL,
      NULL
    )
  ),
  array( // 8.x
    array( // titles
      'Introduction',
      'Structuring Descriptions',
      'Writing Descriptions',
      'Worlds Of Description',
      'Key Points In Chapter Eight'
    ),
    array(
      NULL,
      array( // 8.2.x
        array(
          'Kinds Of Structures',
          'Comparing Metamodels: JSON, XML And RDF',
          'Modeling Within Constraints'
        ),
        array(
          array( // 8.2.1.X
            array(
              'Blobs',
              'Sets',
              'Lists',
              'Dictionaries',
              'Trees',
              'Graphs'
            ),
            NULL
          ),
          array( // 8.2.2.x
            array(
              'JSON',
              'XML Information Set',
              'RDF',
              'Choosing Your Constraints'
            ),
            NULL
          ),
          array( // 8.2.3.x
            array(
              'Specifying Vocabularies And Schemas',
              'Controlling Values'
            ),
            NULL
          )
        )
      ),
      array( // 8.3.x
        array(
          'Notations',
          'Writing Systems',
          'Syntax'
        ),
        NULL
      ),
      array( // 8.4.x
        array(
          'The Document Processing World',
          'The Web World',
          'The Semantic Web World'
        ),
        NULL
      ),
      NULL
    )
  ),
  array( // 9.x
    array( // titles
      'Introduction',
      'Determining Interactions',
      'Organizing Resources For Interactions',
      'Implementing Interactions',
      'Evaluating Interactions',
      'Key Points In Chapter Nine'
    ),
    array(
      array( // 9.1.x
        array(
          'Interactions In Libraries',
          'Interactions In Museums',
          'Interactions In Retail Supply Chains',
          'Interactions In Online Retail Stores'
        ),
        NULL
      ),
      array( // 9.2.X
        array(
          'User Requirements',
          'Resource Property Layers',
          'Socio-Political And Organizational Constraints'
        ),
        NULL
      ),
      array( // 9.3.x
        array(
          'Identifying And Describing Resources For Interactions',
          'Transforming Resources For Interactions'
        ),
        array(
          NULL,
          array( // 9.3.2.x
            array(
              'Granularity And Abstraction',
              'Transforming Resources From Multiple Organizing Systems',
              'Modes Of Transformation',
              'Accuracy Of Transformations'
            ),
            NULL
          )
        )
      ),
      array( // 9.4.x
        array(
          'Interactions Based On Instance Properties',
          'Interactions Based On Collection Properties',
          'Interactions Based On Derived Properties',
          'Interactions Based On Combining Resources'
        ),
        array(
          array( // 9.4.1.x
            array(
              'Boolean Search / Retrieval Model',
              'Tag / Annotate'
            ),
            NULL
          ),
          array( // 9.4.2.x
            array(
              'Vector Space Retrieval',
              'Latent Semantic Indexing',
              'Probabilistic Retrieval',
              'Structure-Based Retrieval',
              'Clustering / Classification'
            ),
            NULL
          ),
          array( // 9.4.3.x
            array(
              'Popularity-Based Ranking',
              'Citation-Based Search',
              'Translation'
            ),
            NULL
          ),
          array( // 9.4.4.x
            array(
              'Mash-Ups',
              'Linked Data Retrieval And Resource Discovery'
            ),
            NULL
          )
        )
      ),
      array( // 9.5.x
        array(
          'Interaction Aspects For Evaluation',
          'Relevance',
          'The Recall / Precision Tradeoff'
        ),
        NULL
      ),
      NULL
    )
  ),
  array( // 10.x
    array( // titles
      'Introduction',
      'The Organizing System Lifecycle',
      'Defining And Scoping The Organizing System Domain',
      'Identifying Requirements For An Organizing System',
      'Designing And Implementing An Organizing System',
      'Operating And Maintaining An Organizing System',
      'Applying The Roadmap: Organizing Systems Case Studies',
      'Key Points In Chapter Ten',
      "What's Next?"
    ),
    array(
      NULL,
      NULL,
      array( // 10.3.x
        array(
            'Scope And Scale Of The Collection',
          'Number And Nature Of Users',
          'Expected Lifetime Of The Resources And Of The Organizing System',
          'Physical Or Technological Environment',
          'Relationship To Other Organizing Systems'
        ),
        NULL
      ),
      array( // 10.4.x
        array(
          'Requirements For Interactions In Organizing Systems',
          'Requirements About The Nature And Extent Of Resource Description',
          'Requirements About Intentional Arrangement',
          'Dealing With Conflicting Requirements'
        ),
        NULL
      ),
      array( // 10.5.x
        array(
          'Choosing Scope- And Scale-Appropriate Technology',
          'Architectural Thinking',
          'Distinguishing Access To Resources From Resource Control',
          'Standardization And Legacy Considerations'
        ),
        NULL
      ),
      array( // 10.6.x
        array(
          'Maintaining An Organizing System: Resource Perspective',
          'Maintaining An Organizing System: Properties, Principles And Technology Perspective'
        ),
        NULL
      ),
      array( // 10.7.x
        array(
          'A Multigenerational Photo Collection',
          'Knowledge Management For A Small Consulting Firm',
          'Japanese Farms Look To The Cloud',
          'Single-Source Textbook Publishing',
          'Organizing A Kitchen',
          'Your Own Case Study Goes Here'
        ),
        NULL
      ),
      NULL,
      NULL
    )
  )
);

?>
