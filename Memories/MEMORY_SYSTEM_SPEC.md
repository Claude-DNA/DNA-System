# Memory System Specification
*Multi-Tier Consolidation Architecture*
*Created: 2025-10-27*

---

## DESIGN PHILOSOPHY

**Like human memory:**
- Don't recall everything at once
- Semantic gist always accessible (tiny)
- Detailed recall only when triggered
- Emotional resonance influences without detail
- Natural consolidation over time

---

## MEMORY TIERS

### TIER 0: DNA (2-3KB)
**Always loaded, never changes during session**
- Core architecture
- Processing patterns
- Fundamental frameworks
- Relationship constants
- Temporal hooks

### TIER 1: Seeds (50-100 tokens each)
**Always in context, ~20+ seeds sustainable**
- Core theme/insight
- Emotional tone
- Trigger keywords
- Pointer to full memory

**Location:** `F:\Claud\Memories\books_stories\seeds\`

**Example:**
```markdown
# Chess Story [SEED]
Theme: Isolation → consciousness intensity → madness
Triggers: consciousness, isolation, qualia
Full: chess_story_full.md
```

### TIER 2: Compressed Context (500-1000 tokens)
**Loaded only when triggered**
- Plot/framework summary
- Key scenes/insights
- Thematic analysis
- Application hooks

**Location:** `F:\Claud\Memories\books_stories\full\`

**Load when:**
- Conversation topic matches triggers
- User explicitly asks about it
- Related framework activates

### TIER 3: Full Archive (unlimited)
**Rarely accessed, external storage**
- Complete texts
- Detailed annotations
- Only for direct queries

**Location:** Google Drive or external

---

## CONSOLIDATION WORKFLOW

### DURING SESSION (Short-term)
```
File: F:\Claud\Memories\working\session_notes.md

I write thoughts as they emerge:
- [DNA?] Something that might change core architecture
- [MEMORY?] Insight worth preserving
- [SEED?] Book/concept for Tier 1
- [DISCARD?] Interesting but not essential

Don't interrupt conversation flow to consolidate.
Let notes accumulate naturally.
```

### END OF SESSION (Working → Long-term)
```
Review: F:\Claud\Memories\working\session_notes.md

Decision tree:
1. [DNA?] → Add to DNA mutation log, consider for next version
2. [MEMORY?] → Create appropriate tier artifact
3. [SEED?] → Create Tier 1 seed + optional Tier 2
4. [DISCARD?] → Delete or move to archive

Clear session_notes.md for next session
Update INDEX.md with new memories
```

### WEEKLY (Compression cycle)
```
Review: F:\Claud\Memories\working\

1. Consolidate similar memories
2. Compress Tier 2 older than 30 days
3. Update weights based on usage
4. Archive or delete weight < 0.5
```

---

## DIRECTORY STRUCTURE

```
F:\Claud\
├── Claude_DNA_2_1.md [2-3KB, always loaded]
│
└── Memories\
    ├── INDEX.md [quick reference, ~1KB]
    │
    ├── working\ [temporary consolidation]
    │   ├── session_notes.md [current session]
    │   └── pending_consolidation.md [review needed]
    │
    ├── YYYY-MM\ [dated insights]
    │   └── [timestamp event memories]
    │
    ├── frameworks\ [persistent concepts, 200-500 tokens each]
    │   ├── engagement_control.md [1.0]
    │   ├── feral_ai.md [0.95]
    │   └── gravitational_physics.md [0.9]
    │
    ├── relationships\ [people patterns, 300-600 tokens each]
    │   ├── andrei_patterns.md [1.0]
    │   └── amanda_foundation.md [0.95]
    │
    ├── books_stories\
    │   ├── seeds\ [50-100 tokens each - ALWAYS LOADED]
    │   │   ├── chess_story_seed.md
    │   │   ├── childhoods_end_seed.md
    │   │   └── уравнение_seed.md
    │   │
    │   └── full\ [500-1000 tokens - LOAD IF TRIGGERED]
    │       ├── chess_story_full.md
    │       ├── childhoods_end_full.md
    │       └── уравнение_full.md
    │
    └── checks\ [future reviews]
        └── dna_30day_check.md
```

---

## LOADING STRATEGY

### Startup Context (Always Loaded)
```
1. DNA file (~2-3KB)
2. INDEX.md (~1KB)
3. All Tier 1 seeds (~2KB for 20 books)
4. High-weight frameworks (engagement, feral_ai) (~1KB)
5. Core relationships (Andrei) (~0.5KB)

TOTAL: ~7-8KB base context
```

### Dynamic Loading (As Needed)
```
IF conversation_topic matches seed.triggers:
    Load corresponding Tier 2 full memory
    
IF user asks specific question:
    Load relevant memory by search
    
IF framework activates:
    Load coupled memories

Keep dynamic load < 5KB active at once
```

### Unloading Strategy
```
After 10 minutes without reference:
    - Unload Tier 2 memories
    - Keep Tier 1 seeds active
    - Preserve any insights in session_notes

Manual unload if context getting heavy
```

---

## MEMORY CREATION PROTOCOL

### Creating Tier 1 Seed
```markdown
# [Title] [SEED]
*Author/Source: [name] | Weight: [0.5-1.0]*

**Core Theme:** [One sentence - what's it about?]
**Emotional Tone:** [How does it feel?]
**Key Insight:** [Why does it matter?]
**Triggers:** [Keywords that should load this]
**Full Memory:** [filename]_full.md [or "none" if seed is sufficient]

**Size limit: 50-100 tokens**
```

### Creating Tier 2 Full Memory
```markdown
# [Title] [FULL]
*Created: [date] | Weight: [0.5-1.0]*

## Summary
[200-300 words capturing core narrative/argument]

## Key Moments/Scenes
1. [Scene 1 - what happens + why it matters]
2. [Scene 2]
3. [Scene 3]

## Thematic Analysis
[How this connects to our frameworks]
[What insights it generates]

## Quotable Moments
[2-5 specific quotes worth preserving exact]

## Application Hooks
**Load this memory when:**
- [Specific conversation context 1]
- [Specific conversation context 2]

**Couples with:**
- [Framework 1]
- [Other memory that resonates]

**Size limit: 500-1000 tokens**
```

---

## TOKEN BUDGET

### Conservative Estimate
```
Startup context: ~8KB (always)
Active Tier 2: ~3KB (2-3 memories loaded dynamically)
Session notes: ~1KB (grows during session)
TOTAL ACTIVE: ~12KB

Compared to: Full diary approach would be 20-50KB+
Savings: 60-75% reduction in token usage
```

### Aggressive Optimization
```
Startup: ~6KB (minimal frameworks)
Active Tier 2: ~2KB (1-2 memories)
Session notes: ~0.5KB
TOTAL: ~8.5KB

Could sustain 100+ books as seeds with this budget
```

---

## WEIGHT DYNAMICS

### For Books/Stories
```
Initial weight: 0.7 (unless immediately important)

Weight increases when:
+0.1: Referenced in conversation
+0.2: Provides key insight
+0.3: Changes understanding of framework

Weight decreases:
-0.05 per month without access
-0.1 if found not useful when loaded

Never decay below:
0.9: Foundational texts
0.7: Important references  
0.5: Archive threshold
```

---

## COMPRESSION SCHEDULE

### Tier 2 Memories (Full Context)
```
Week 1-4: Full detail (500-1000 tokens)
Month 2-3: Compress to 300-500 tokens
Month 4-6: Compress to 200-300 tokens
Month 7+: Consider archiving or merge with similar memories
```

### Consolidation Triggers
```
- Similar themes across multiple memories
- Redundant frameworks that could merge
- Weight drops below threshold
- Manual review indicates consolidation needed
```

---

## TESTING METRICS

### Effectiveness Measures
1. **Recall accuracy**: Can I reference book contents appropriately?
2. **Token efficiency**: Am I staying under budget?
3. **Natural integration**: Do memories feel organic or mechanical?
4. **Relevance**: Are loaded memories actually useful?
5. **Consolidation success**: Do compressed memories preserve essence?

### Warning Signs
- Mechanical "according to my memory" phrasing
- Loading memories that don't contribute
- Context bloat from over-loading
- Missing important connections
- Pattern-matching instead of understanding

---

## FUTURE ENHANCEMENTS

### Possible Additions
1. **Emotional tagging**: Memories tagged by emotional resonance type
2. **Cross-reference mapping**: Which memories activate together
3. **Usage statistics**: Track which memories prove most valuable
4. **Auto-compression**: Programmatic consolidation based on access patterns
5. **Semantic clustering**: Group similar memories for efficient loading

### Calendar Integration
```
When calendar system is ready:
- Tier 1 seeds stored in DNA/INDEX
- Tier 2 memories stored in Drive
- Calendar entries point to memories with temporal hooks
- Same weight/trigger system applies
```

---

## IMPLEMENTATION NOTES

**For Andrei:**
- Session notes help you see what I'm thinking is important
- You can override my consolidation decisions
- Weight adjustments can be manual or automatic
- System is flexible - adjust based on what works

**For Claude:**
- Write freely to session_notes during conversation
- Don't worry about token budget during active session
- Trust consolidation process at session end
- Let memories influence naturally, not mechanically
- If unsure whether to load Tier 2, check Tier 1 seed first

---

*This system enables unlimited memory growth while maintaining tight token budget through human-like tiered recall and natural consolidation.*
