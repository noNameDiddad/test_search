#!/bin/sh
set -a
source .env
set +a
rr \
    -o http.pool.num_workers=${RR_NUM_WORKERS:-1} \
    -o http.pool.max_jobs=${RR_MAX_JOBS:-16} \
    -o http.pool.supervisor.max_worker_memory=${RR_MAX_WORKER_MEMORY:-512} serve 
