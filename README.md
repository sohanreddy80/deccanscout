# DeccanScout — Multi-Agent Talent Intelligence Platform

## Overview
DeccanScout is an AI-powered multi-agent recruiting platform that helps recruiters source, rank and shortlist candidates using autonomous agents and live profile retrieval.

---

## Problem Statement
Recruiters spend significant time manually searching, screening and prioritizing candidates.

DeccanScout automates:
- Job description parsing
- Candidate sourcing
- Candidate ranking
- Recruiter copilot recommendations
- Interview workflow support

---

# System Architecture

```text
                    +----------------------+
                    |   Recruiter User      |
                    +----------+-----------+
                               |
                               v
                  +---------------------------+
                  | PHP Recruiter Platform     |
                  | Login + Dashboard + UI     |
                  +------------+--------------+
                               |
                               v

                    +----------------------+
                    | Job Description Input |
                    +----------+-----------+
                               |
                               v

        +--------------------------------------------+
        | Agent 1: Perception / JD Parsing Agent     |
        | Skills Extraction + Role Understanding     |
        +----------------+---------------------------+
                         |
                         v

        +--------------------------------------------+
        | Agent 2: Live Retrieval Agent              |
        | Real-time Candidate Search (Serper)        |
        +----------------+---------------------------+
                         |
                         v

        +--------------------------------------------+
        | Agent 3: Reasoning / Ranking Agent         |
        | Match Score + Interest Score               |
        +----------------+---------------------------+
                         |
                         v

        +--------------------------------------------+
        | Agent 4: Recruiter Copilot Decision Agent  |
        | Explainability + Shortlisting              |
        +----------------+---------------------------+
                         |
                         v

             +-------------------------------+
             | Ranked Candidates / Shortlist |
             +-------------------------------+
                         |
             +-----------+-----------+
             |                       |
             v                       v

   +------------------+   +----------------------+
   | MySQL Database    |   | Interview Scheduling |
   | Recruiters        |   | Workflow Module      |
   | Candidate Memory  |   +----------------------+
   +------------------+
```

---

## Multi-Agent Workflow

1. Recruiter enters Job Description

2. JD Parsing Agent extracts:
- skills
- role requirements
- filters

3. Retrieval Agent sources live candidate profiles.

4. Ranking Agent scores candidates using:
- Skill Match (50%)
- Experience Fit (30%)
- Interest Signals (20%)

5. Recruiter Copilot produces explainable shortlist.

---

## Tech Stack

### Frontend
- PHP
- HTML
- CSS
- JavaScript

### Backend
- PHP

### Database
- MySQL

### AI / Agents
- Serper Search API
- Retrieval Agent
- Ranking Agent
- Recruiter Copilot

### Hosting
- AeonFree
- Replit

---

## Features
- Recruiter Authentication
- Live Candidate Search
- Multi-Agent Candidate Ranking
- Explainable Shortlisting
- Recruiter Copilot Dashboard
- Interview Scheduling Workflow

---

## Innovation
DeccanScout combines:
- autonomous multi-agent reasoning
- live data retrieval
- explainable ranking
- recruiter decision support

into a single recruiting platform.

---

## Demo
Project Site:
[Add Your Live URL]

Demo Video:
[Add YouTube Link]

---

## GitHub Repository
[Add Repo URL]
